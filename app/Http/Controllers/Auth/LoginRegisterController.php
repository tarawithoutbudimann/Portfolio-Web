<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function __construct()
    {
        // Middleware 'guest' memastikan hanya pengguna tamu yang dapat mengakses metode tertentu.
        // Metode 'logout' dan 'dashboard' dapat diakses bahkan jika pengguna sudah masuk.
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    // Metode untuk menampilkan halaman registrasi
    public function register(){
        return view('auth.register');
    }

    // Metode untuk memproses formulir registrasi
    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = new User([
            'name' => $request->name, 
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
$user->save();
        //Membuat pengguna baru

        //Percobaan untuk melakukan login setelah registrasi berhasil
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();

        //Mengarahkan ke halaman dashboard dengan pesan sukses
        return redirect()->route('dashboard')
            ->withSucces('You Have Sucessfully Registered & Logged In !');
    }

    //Metode untuk menampilkan halaman login
    public function login(){
        return view('auth.login');
    }

    //Metode untuk memproses formulir login
    public function authenticate(Request $request){
        //Validasi input dari formulir login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //Percobaan untuk melakukan autentikasi pengguna
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                -> withSuccess ('You Have Successfully Logged In!');
        }

        //Jika autentikasi gagal, akan kembali ke halaman login dengan pesan kesalahan
        return back()->withErrors([
            'email'=> 'Your Provided Credentials Do Not Match With Our Records',
        ])->onlyInput('email');
    }

    //Metode untuk menampilkan halaman dashboard
    public function dashboard(){

        //Memeriksa apakah pengguna sudah masuk
        if (Auth::check()){
            return view('auth.dashboard');
        }

        //Jika pengguna belum masuk dapat kembali ke halaman login dengan pesan kesalahan
        return redirect()->route('login')
        ->withErrors([
            'email'=>'Please Login To Access The Dashboard.',
        ])->onlyInput('email');
    }

    //Metode untuk melakukan logout
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //Mengalihkan ke halaman login dengan pesan sukses
        return redirect()->route('login')
        -> withSuccess('You Have Logged Out Successfully!');;
    }
}

