<?php
namespace App\Http\Controllers;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tempat_lahir' => ['required', 'string', 'max:100'],
            'tanggal_lahir' => ['required', 'date'],
            'no_hp_orang_tua' => ['required', 'string', 'max:15'],
            'kategori' => ['required', 'in:Reguler,Non Reguler'],
            'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
            'alamat' => ['required', 'string', 'max:255'],
            'asal_sekolah' => ['required', 'string', 'max:255'],
            'pernyataan_persetujuan' => ['required', 'accepted'],
            'no_kip' => ['required_if:kategori,Non Reguler', 'nullable', 'string', 'max:255'],
            'dokumen_kip' => ['required_if:kategori,Non Reguler', 'nullable', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:2048'],
        ]);

        if ($request->hasFile('dokumen_kip')) {
            $path = $request->file('dokumen_kip')->store('public/dokumen-kip');
            $validatedData['dokumen_kip'] = str_replace('public/', '', $path);
        }

        $validatedData['user_id'] = Auth::id();
        Pendaftaran::create($validatedData);

        return redirect()->route('dashboard')->with('success', 'Formulir pendaftaran berhasil diserahkan!');
    }
}