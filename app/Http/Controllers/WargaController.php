<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warga;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warga = Warga::all();

        return view('warga.index', compact('warga'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_ktp' => 'required',
            'rt' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'status_tinggal' => 'required',
            'blok' => 'required'
        ]);
        

        $warga = new Warga();

        $warga->nik = $request->nik;
        $warga->nama = $request->nama;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->jenis_kelamin = $request->jenis_kelamin;
        $warga->alamat_ktp = $request->alamat_ktp;
        $warga->rt = $request->rt;
        $warga->rw = $request->rw;
        $warga->desa = $request->desa;
        $warga->kecamatan = $request->kecamatan;
        $warga->kabupaten_kota = $request->kabupaten;
        $warga->provinsi = $request->provinsi;
        $warga->agama = $request->agama;
        $warga->pekerjaan = $request->pekerjaan;
        $warga->status_nikah = $request->status_perkawinan;
        $warga->status_tinggal = $request->status_tinggal;
        $warga->blok = $request->blok;

        $warga->save();

        return redirect('warga')->with('status','Warga berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Warga $warga)
    {
        return view('warga.edit', compact('warga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warga $warga)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_ktp' => 'required',
            'rt' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'status_tinggal' => 'required',
            'blok' => 'required'
        ]);

        $warga = Warga::find($warga->id);

        $warga->nik = $request->nik;
        $warga->nama = $request->nama;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->jenis_kelamin = $request->jenis_kelamin;
        $warga->alamat_ktp = $request->alamat_ktp;
        $warga->rt = $request->rt;
        $warga->rw = $request->rw;
        $warga->desa = $request->desa;
        $warga->kecamatan = $request->kecamatan;
        $warga->kabupaten_kota = $request->kabupaten;
        $warga->provinsi = $request->provinsi;
        $warga->agama = $request->agama;
        $warga->pekerjaan = $request->pekerjaan;
        $warga->status_nikah = $request->status_perkawinan;
        $warga->status_tinggal = $request->status_tinggal;
        $warga->blok = $request->blok;

        $warga->save();

        return redirect('warga')->with('status','Data warga berhasil diupdate');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warga $warga)
    {
        Warga::destroy($warga->id);

        return redirect('warga')->with('status','Data warga berhasil dihapus');
    }
}
