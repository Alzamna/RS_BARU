<?php

namespace App\Http\Controllers;

use App\Models\Rajal;
use App\Models\Resepobat;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Contracts\Service\Attribute\Required;

class RajalController extends Controller
{
    public function rajal()
    {
        $query = Rajal::query();

        // Tambahkan kondisi pencarian jika ada parameter 'search'
        if ($search = request('search')) {
            $query->where('Nama_Pasien', 'like', '%' . $search . '%');
        }
    
        // Eksekusi kueri dengan pagination
        $rsRajal = $query->latest()->paginate(5);

        // Mengirimkan hasil ke view
        return view('pasien_rajal.rajal', compact('rsRajal'));
    }

    public function create()
    {
        return view('pasien_rajal.create-rajal');
    }
    public function store(Request $request)
    {
        // dd($request->all())
        Rajal::create([
            'Nama_Pasien' => $request->input('Nama_Pasien'),
            'NIK' => $request->input('NIK'),
            'Jenis_Kelamin' => $request->input('Jenis_Kelamin'),
            'Alamat' => $request->input('Alamat'),
            'Keluhan' => $request->input('Keluhan'),
            'Nama_Dokter' => $request->input('Nama_Dokter'),
            'Ruang_Pemeriksaan' => $request->input('Ruang_Pemeriksaan'),
        ]);

        return redirect('/pasien_rajal')->with('success', 'Data berhasil disimpan.');
    }

    public function update(Request $request, $NIK)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'Nama_Pasien' => 'required|string',
            'NIK' => 'required',
            'Jenis_Kelamin' => 'required',
            // 'Jenis_Kelamin' => 'required|string|in:Laki-Laki, Perempuan',
            'Alamat' => 'required|string',
            'Keluhan' => 'required|string',
            'Nama_Dokter' => 'Required|string',
            'Ruang_Pemeriksaan' => 'required',
            // 'Ruang_Pemeriksaan' => 'required|string|in:Poliklinik, Poli Anak, Poli Mata, Poli Gigi, Poli THT, Poli Saraf, Poli Bedah, Poli Dalam',
        ]);

        // Dapatkan obat berdasarkan ID
        $rajal = Rajal::findOrFail($NIK);

        // Simpan perubahan
        $rajal->update([
            'Nama_Pasien' => $request->input('Nama_Pasien'),
            'NIK' => $request->input('NIK'),
            'Jenis_Kelamin' => $request->input('Jenis_Kelamin'),
            'Alamat' => $request->input('Alamat'),
            'Keluhan' => $request->input('Keluhan'),
            'Nama_Dokter' => $request->input('Nama_Dokter'),
            'Ruang_Pemeriksaan' => $request->input('Ruang_Pemeriksaan'),
        ]);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Perubahan berhasil diubah.');
    }

    public function destroy($NIK) {
        $rajal = Rajal::findOrFail($NIK);

        $rajal->delete();

        return redirect()->back()->with('success', 'Perubahan berhasil dihapus.');
        ;
    }


    public function cetakRajal()
    {
        $cetakRajal = Rajal::all();
        return view('pasien_rajal.cetak-rajal', compact('cetakRajal'));
    }
}
