<?php

namespace App\Http\Controllers;

use App\Models\networks;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class TambahUserController extends Controller
{
    public function view(Request $request)
    {
        $Datauser = User::all();
        return view('TambahDataUser', ['Datauser' => $Datauser]);
    }

    public function index(Request $request)
    {
        return view('TambahDataUser');
    }

    public function delete($id)
    {
        $Datauser = User::find($id);

        if (!$Datauser) {
            return response()->json('TambahDataUser')->with(['error' => 'Data Sekolah tidak ditemukan']);
        }
        $Datauser->delete();
        return redirect()->route('TambahDataUser')->with(['success' => 'Data Sekolah berhasil dihapus']);
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
    
        if (!$data) {
            return response()->json(['error' => 'Data User tidak ditemukan']);
        }
    
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255',
            'referral_code' => 'required|string|max:255',
            'role_as' => 'required|string|max:255',
        ]);
    
        // Update atribut sesuai nama kolom di database
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = bcrypt($request->input('password')); // pastikan untuk mengenkripsi password
        $data->referral_code = $request->input('referral_code');
        $data->role_as = $request->input('role_as');
        $data->save();
    
        return response()->json(['success' => 'Data User berhasil diupdate']);
    }
    
    



    public function registered(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:2',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $referralCode = Str::random(8);
        $token = Str::random(59);
        if (isset($request->referral_code)) {
            $userData = User::where('referral_code', $request->referral_code)->get();

            if (count($userData) > 0) {
                // Insert user data into the "users" table and let PostgreSQL generate the "id"
                $user_id = User::insertGetId([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'referral_code' => $referralCode,
                    'remember_token' => $token,
                ]);
                networks::insert([
                    'referral_code' => $request->referral_code,
                    'user_id' => $user_id,
                    'parent_user_id' => $userData[0]['id'],
                ]);
            } else {
                return back()->with('error', 'Invalid referral code.');
            }
        } else {
            User::insert([
                'name' => $request->name,
                'email' => $request->email,
                'referral_code' => $referralCode,
                'password' => Hash::make($request->password),
            ]);
        }
        try {

            $domain = URL::to('/');
            $url = $domain . '/referral-register?ref=' . $referralCode;

            $data['url'] = $url;
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = $request->password;
            $data['title'] = 'Registered';

            Mail::send('Admin.registermail', ['data' => $data], function ($message) use ($data) {
                $message->from('tegarilham4444@gmail.com', 'Tegar karunia ilham');
                $message->to($data['email'])->subject($data['title']);
            });

            //Verify Mail Send
            $url = $domain . '/email-verification' . $token;

            $data['url'] = $url;
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['title'] = 'Kode Verify Mail';

            Mail::send('Admin.verifyMail', ['data' => $data], function ($message) use ($data) {
                $message->from('tegarilham4444@gmail.com', 'Tegar karunia ilham');
                $message->to($data['email'])->subject($data['title']);
            });

            return back()->with('success', 'User created successfully.');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan saat mengirim email, Anda dapat menangani kesalahan di sini.
            // Misalnya, menampilkan pesan error ke pengguna atau melakukan tindakan lain.
            //   $errorMessage = 'Terjadi kesalahan saat mengirim email: ' . $e->getMessage();
            //   return back()->with('error', $errorMessage);
        }
    }

    public function LoadTokencodeRegister(Request $request)
    {
        if (isset($request->ref)) {
            $referralCode = $request->ref;
            $userData = User::where('referral_code', $referralCode)->get();
            if (count($userData) > 0) {
                return view('User.registeruserreferal.blade.php', ['referralCode' => $referralCode]);
            } else {
                return redirect('Blank.404');
            }
        } else {
            return redirect('/');
        }
    }
}
