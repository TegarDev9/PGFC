<?php



use App\Http\Controllers\BaganController;
use App\Http\Controllers\DetailDataSekolahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataSekolahController;
use App\Http\Controllers\DetailBaganController;
use App\Http\Controllers\TambahUserController;
use App\Http\Controllers\GrubController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DetailJadwalController;


/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------
--------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// require __DIR__ . '/auth.php';


// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/index', [UserController::class, 'Loadindex']);
Route::get('/logout', [UserController::class, 'logout']);

    
 
// Route::group(['middleware' => ['is_login']], function () {
Route::get('/register', [UserController::class, 'loadregistrasi'])->name('register');
Route::get('/register', [UserController::class, 'view'])->name('register');
Route::post('/TambahDataUser', [UserController::class, 'registered'])->name('registered');
Route::get('/referral-register', [UserController::class, 'LoadreferalRegister']);
Route::get('/login', [UserController::class, 'LoadLogin']);
Route::post('/login', [UserController::class, 'userlogin'])->name('login');
// });

// Route::group(['middleware' => ['is_logout']], function () {

Route::get('/TambahDataUser', [TambahUserController::class, 'index'])->name('TambahDataUser');
Route::get('/TambahDataUser', [TambahUserController::class, 'view'])->name('TambahDataUser');
Route::get('/TambahDataUser/delete/{id}', [TambahUserController::class, 'delete'])->name('TambahDataUser.delete');
Route::put('/TambahDataUser/update/{id}', [TambahUserController::class, 'update'])->name('TambahDataUser.update'); 

// Route::get('/TambahDataUser', [TambahUserController::class, ' LoadUser'])->name('TambahDataUser');
Route::post('/TambahDataUser', [TambahUserController::class, 'registered'])->name('registered');
Route::post('/TambahDataUser', [TambahUserController::class, 'loadregistrasi']);


Route::get('/DataSekolah/excelexport', [DataSekolahController::class,'downloadExcel'])->name('excel.export');
Route::get('/DataSekolah/pdfsekolah', [DataSekolahController::class, 'pdfsekolah'])->name('pdfsekolah');
Route::get('/DataSekolah/DetailDataSekolah', [DetailDataSekolahController::class, 'index'])->name('DetailDataSekolah');

Route::get('/DataSekolah/show/{id}', [DataSekolahController::class, 'show']); // Rute untuk mendapatkan data sekolah
Route::put('/DataSekolah/update/{id}', [DataSekolahController::class, 'update'])->name('DataSekolah.update'); // Rute untuk mengupdate data sekolah
Route::get('/DataSekolah/delete/{id}', [DataSekolahController::class, 'delete'])->name('DataSekolah.delete');
Route::get('/DataSekolah', [DataSekolahController::class, 'index'])->name('DataSekolah');
Route::get('/DataSekolah', [DataSekolahController::class, 'view'])->name('DataSekolah');
Route::post('/TambahDataUser', [UserController::class, 'registered'])->name('registered');

Route::get('/Bagan', [BaganController::class, 'view'])->name('Bagan');
Route::get('/Bagan/DetailBagan',[DetailBaganController::class, 'view'])->name('DetailBagan');

Route::get('/Grup', [GrubController::class, 'index'])->name('Grup');
// Route::get('/Grup', [GrubController::class, 'view'])->name('Grup');
Route::get('/Grup', [GrubController::class, 'view'])->name('Grup');
Route::get('/jadwal/{id}', [DetailJadwalController::class, 'viewdetail'])->name('detailJadwal');


Route::get('/Jadwal', [JadwalController::class, 'index'])->name('Jadwal');
Route::get('/Jadwal', [JadwalController::class, 'view'])->name('Jadwal');
Route::get('/Jadwal/export/excel', [JadwalController::class, 'export_excel'])->name('Jadwal.export.excel');






Route::get('about', [LandingController::class, 'about'])->name('landing.about');
Route::get('blog', [LandingController::class, 'blog'])->name('landing.blog');
Route::get('blog-single', [LandingController::class, 'blog_single'])->name('landing.blog-single');
Route::get('competition', [LandingController::class, 'competition'])->name('landing.competition');
Route::get('contact', [LandingController::class, 'contact'])->name('landing.contact');
Route::get('details-club', [LandingController::class, 'details_club'])->name('landing.details-club');
Route::get('gallery', [LandingController::class, 'gallery'])->name('landing.gallery');
Route::get('pgfc', [LandingController::class, 'pgfc'])->name('landing.pgfc');
Route::get('klasmen', [LandingController::class, 'klasmen'])->name('landing.klasmen');
Route::get('result', [LandingController::class, 'result'])->name('landing.result');
Route::get('result-single', [LandingController::class, 'result_single'])->name('landing.result-single');
Route::get('team', [LandingController::class, 'team'])->name('landing.team');
Route::get('team-single', [LandingController::class, 'team_single'])->name('landing.team-single');
Route::resource('/', LandingController::class);
// });