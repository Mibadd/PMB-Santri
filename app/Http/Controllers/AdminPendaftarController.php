<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran; // <-- Import model Pendaftaran
use Illuminate\Http\Request;

class AdminPendaftarController extends Controller
{
    public function index()
    {
        // Ambil semua data pendaftaran beserta data user yang terkait
        $pendaftarans = Pendaftaran::with('user')->latest()->get();

        // Kirim data ke view
        return view('admin.pendaftar.index', compact('pendaftarans'));
    }
}