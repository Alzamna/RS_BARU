<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function dokter()
    {
        $query = Dokter::query();

        // Tambahkan kondisi pencarian jika ada parameter 'search'
        if ($search = request('search')) {
            $query->where('Nama_Dokter', 'like', '%' . $search . '%');
        }
    
        // Eksekusi kueri dengan pagination
        $rsDokter = $query->latest()->paginate(5);

        // Mengirimkan hasil ke view
        return view('data_dokter.dokter', compact('rsDokter'));
    }

    public function create()
    {
        return view('data_dokter.create-dokter');
    }
    public function store(Request $request)
    {
        // dd($request->all())
        Dokter::create([
            'Nama_Dokter' => $request->input('Nama_Dokter'),
            'NIK_Dokter' => $request->input('NIK_Dokter'),
            'Spesialisasi' => $request->input('Spesialisasi'),
            'Jadwal' => $request->input('Jadwal'),
            'Alamat' => $request->input('Alamat'),
            'No_Telp' => $request->input('No_Telp'),
            'Status' => $request->input('Status'),
        ]);

        return redirect('/data_dokter')->with('success', 'Data berhasil disimpan.');
    }

    public function update(Request $request, $NIK_Dokter)
    {
        // dd($request->all());
        // Validasi data yang diterima dari formulir
        $request->validate([
            'Nama_Dokter' => 'required|string',
            'Spesialisasi' => 'required|string',
            'Jadwal' => 'required|string',
            'Alamat' => 'required|string',
            'No_Telp' => 'required|string',
            'Status' => 'required|string',
        ]);

        // dd("Validasi Berhasil");

        // Dapatkan obat berdasarkan ID
        $dokter = Dokter::findOrFail($NIK_Dokter);

        // Simpan perubahan
        $dokter->update([
            'Nama_Dokter' => $request->Nama_Dokter,
            'Spesialisasi' => $request->Spesialisasi,
            'Jadwal' => $request->Jadwal,
            'Alamat' => $request->Alamat,
            'No_Telp' => $request->No_Telp,
            'Status' => $request->Status,
        ]);
        // dd("Update berhasil");
        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil diubah.');
    }

    public function destroy($NIK_Dokter) {
        $dokter = Dokter::findOrFail($NIK_Dokter);

        $dokter->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
        ;
    }


    public function cetakDokter()
    {
        $cetakDokter = Dokter::all();
        return view('data_dokter.cetak-dokter', compact('cetakDokter'));
    }
}
