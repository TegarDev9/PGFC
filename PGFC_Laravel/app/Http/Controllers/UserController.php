<?php

namespace App\Http\Controllers;

use App\Models\networks;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function loadregistrasi(Request $request)
    {
        return view('register');
    
    }
    public function view()
    {
        return view('register');
    
    }


    public function LoadLogin(){
        return view('login');
    }

  

    public function userLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $user = User::where('email', $request->email)->first();
        if(!empty($user)){
                if($user->referral_code   === null){
                    return back()->with('error', 'Email belum terverifikasi');
                }
                if($user->role_as === null){
                    return back()->with('error', 'Email belum terverifikasi');
                }
            }
            $user = $request->only('email', 'password','role_as=1');
            if(Auth::attempt($user)){
                return redirect('/index');
            }
            $user = $request->only('email', 'password','role_as=0');
            if(Auth::attempt($user)){
                return redirect('/user/index');
            }
               
            else{
                return back()->with('error', 'Username dan Password salah');
            }
    }

    public function Loadindex(){
        return view('index');
    }

    public function viewuser(Request $request){
      $datauser = User::all();
        return view('viewuser', ['datauser' => $datauser]);
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
        if(isset($request->referral_code)){
            $userData = User::where('referral_code', $request->referral_code)->get();
        
            if(count($userData) > 0){
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
       
    }
    else{
        return back()->with('error', 'Invalid referral code.');
       
    }

    }
    else{
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'referral_code' => $referralCode,
            'password' => Hash::make($request->password),
        ]);
    }
//     try {

//     $domain = URL::to('/');
//     $url = $domain.'/referral-register?ref='.$referralCode;

//     $data['url'] = $url;
//     $data['name'] = $request->name;
//     $data['email'] = $request->email;
//     $data['password'] = $request->password;
//     $data['title'] = 'Registered';

//     Mail::send('Admin.registermail',['data' => $data], function($message) use ($data) {
//         $message->from('tegarilham4444@gmail.com', 'Tegar karunia ilham');
//         $message->to($data['email'])->subject($data['title']);
        
//     });

//     //Verify Mail Send
//     $url = $domain.'/email-verification'.$token;

//     $data['url'] = $url;
//     $data['name'] = $request->name;
//     $data['email'] = $request->email;
//     $data['title'] = 'Kode Verify Mail';

//     Mail::send('Admin.verifyMail',['data' => $data], function($message) use ($data) {
//         $message->from('tegarilham4444@gmail.com', 'Tegar karunia ilham');
//         $message->to($data['email'])->subject($data['title']);
//     });

//     return back()->with('success', 'User created successfully.');
// } catch (\Exception $e) {
//     // Jika terjadi kesalahan saat mengirim email, Anda dapat menangani kesalahan di sini.
//     // Misalnya, menampilkan pesan error ke pengguna atau melakukan tindakan lain.
//     $errorMessage = 'Terjadi kesalahan saat mengirim email: ' . $e->getMessage();
//     return back()->with('error', $errorMessage);
// }
    }

public function LoadTokencodeRegister(Request $request){
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
