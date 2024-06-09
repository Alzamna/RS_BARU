<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileController extends Controller
{
    
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $profile = User::all();

        //render view with products
        return view('admin.profile_admin', compact('profile'));
    }
    
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get product by ID
        $profile = User::findOrFail($id);

        //render view with product
        return view('admin.edit_profile_admin', compact('profile'));
    }
        
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    // public function update(Request $request, $id): RedirectResponse
    // {
    //     //validate form
    //     $request->validate([
    //         'nik' => 'required',
    //         'name' => 'required|string',
    //         // 'tempat_lahir' => 'required|string',
    //         // 'tanggal_lahir' => 'required|date',
    //         // 'no_telp' => 'required|string',
    //         // 'jenis_kelamin' => 'required',
    //         // 'deskripsi' => 'nullable|string',
    //         'provinsi' => 'required|string',
    //         // 'kota_kabupaten' => 'required|string',
    //         // 'kode_pos' => 'required|string',
    //         // 'kecamatan' => 'required|string',
    //     ]);

    //     //get product by ID
    //     $profile = User::findOrFail($id);

        

    // //update product without image
    //         $profile->update([
    //             'nik' => $request->nik,
    //             'name' => $request->name,
    //             // 'tempat_lahir' => $request->tempat_lahir,
    //             // 'tanggal_lahir' => $request->tanggal_lahir,
    //             // 'no_telp' => $request->no_telp,
    //             // 'jenis_kelamin' => $request->jenis_kelamin,
    //             // 'deskripsi' => $request->deskripsi,
    //             'provinsi' => $request->provinsi,
    //             // 'kota_kabupaten' => $request->kota,
    //             // 'kode_pos' => $request->kode_pos,
    //             // 'kecamatan' => $request->kecamatan,
    //         ]);

    //     //redirect to index
    // return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Diubah!']);

    // }

    public function update(Request $request, $id): RedirectResponse
        {
            // Validasi form
    $request->validate([
        'nik' => 'required',
        'name' => 'required|string',
        'tempat_lahir' => 'required|string',
        'tanggal_lahir' => 'required|date',
        'no_telp' => 'required|string',
        'jenis_kelamin' => 'required',
        'provinsi' => 'required|string',
        'kota_kabupaten' => 'required|string',
        'kode_pos' => 'required|string',
        'kecamatan' => 'required|string',
    ]);

    // Dapatkan profil berdasarkan ID
    $profile = User::findOrFail($id);

    // Update profil
    $profile->update([
        'nik' => $request->nik,
        'name' => $request->name,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'no_telp' => $request->no_telp,
        'jenis_kelamin' => $request->jenis_kelamin,
        'provinsi' => $request->provinsi,
        'kota_kabupaten' => $request->kota_kabupaten,
        'kode_pos' => $request->kode_pos,
        'kecamatan' => $request->kecamatan,
    ]);

            //arahkan ke indeks profil dengan pesan sukses
            return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Diubah!']);
        }


}
