<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // 2. Cari admin berdasarkan nama dan email
        $admin = Admin::where('name', $request->name)
                    ->where('email', $request->email)
                    ->first();

        if($admin){
            // 3. Simpan data ke session
            session([
                // 'admin_logged_in' => true,
                'admin_id' => $admin->id,
                'admin_name' => $admin->name
            ]);
            // dd(session()->all()); // <--- Tambahkan ini untuk debugging
            // 4. Redirect ke halaman pesan
            return redirect()->route('admin.messages');
        } else {
            // 5. Jika gagal, balik ke login dengan pesan error
            return back()->with('error', 'Data tidak ditemukan atau kredensial salah');
        }
    }

    public function logout()
    {
    // Menghapus semua data session
    session()->flush();

    // Atau jika ingin spesifik:
    // session()->forget(['admin_id', 'admin_name']);

    return redirect()->route('admin.login')->with('success', 'Berhasil logout');
    }
}