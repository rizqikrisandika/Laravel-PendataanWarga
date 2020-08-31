@extends('layout.main')
@section('title','Edit Warga')
@section('menu','Edit Warga')
@section('body')

<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Edit Warga</h4>
                            <form method="post" action="{{ route('update.warga',$warga->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <h4 class="header-title">A. Data Pribadi</h4>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">NIK</label>
                                    <input class="form-control @error('nik') is-invalid @enderror" type="number"
                                        name="nik" value="{{ $warga->nik }}" id="example-text-input">
                                    @error('nik')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Nama</label>
                                    <input class="form-control @error('nama') is-invalid @enderror" type="text"
                                        name="nama" value="{{ $warga->nama }}" id="example-search-input">
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-row align-items-center">
                                    <div class="col-sm-6 my-1">
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">Tempat
                                                Lahir</label>
                                            <input class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                type="text" name="tempat_lahir" value="{{ $warga->tempat_lahir }}"
                                                id="example-search-input">
                                            @error('tempat_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 my-1">
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">Tanggal
                                                Lahir</label>
                                            <input class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                type="date" name="tanggal_lahir" value="{{ $warga->tanggal_lahir }}"
                                                id="example-search-input">
                                            @error('tanggal_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Jenis Kelamin</label>
                                    <select class="custom-select @error('jenis_kelamin') is-invalid @enderror"
                                        name="jenis_kelamin">
                                        <option value="L"
                                            {{ $warga->jenis_kelamin === "L" ? "selected" : "" }}>
                                            L</option>
                                        <option value="P"
                                            {{ $warga->jenis_kelamin === "P" ? "selected" : "" }}>
                                            P</option>

                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <h4 class="header-title">B. Data Alamat</h4>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Alamat KTP</label>
                                    <input class="form-control @error('alamat_ktp') is-invalid @enderror" type="text"
                                        name="alamat_ktp" value="{{ $warga->alamat_ktp }}" id="example-search-input">
                                    @error('alamat_ktp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-row align-items-center">
                                    <div class="col-sm-3 my-1">
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">RT</label>
                                            <input class="form-control @error('rt') is-invalid @enderror" type="number"
                                                name="rt" value="{{ $warga->rt }}" id="example-search-input">
                                            @error('rt')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3 my-1">
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">RW</label>
                                            <input class="form-control @error('rw') is-invalid @enderror" type="number"
                                                name="rw" value="{{ $warga->rw }}" id="example-search-input">
                                            @error('rw')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Desa/Kelurahan</label>
                                    <input class="form-control @error('desa') is-invalid @enderror" type="text"
                                        name="desa" value="{{ $warga->desa }}" id="example-search-input">
                                    @error('desa')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Kecamatan</label>
                                    <input class="form-control @error('kecamatan') is-invalid @enderror" type="text"
                                        name="kecamatan" value="{{ $warga->kecamatan }}" id="example-search-input">
                                    @error('kecamatan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Kabupaten/Kota</label>
                                    <input class="form-control @error('kabupaten') is-invalid @enderror" type="text"
                                        name="kabupaten" value="{{ $warga->kabupaten_kota }}"
                                        id="example-search-input">
                                    @error('kabupaten')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Provinsi</label>
                                    <input class="form-control @error('provinsi') is-invalid @enderror" type="text"
                                        name="provinsi" value="{{ $warga->provinsi }}" id="example-search-input">
                                    @error('provinsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <h4 class="header-title">C. Data Lain-Lain</h4>

                                <div class="form-group">
                                    <label class="col-form-label">Agama</label>
                                    <select class="custom-select @error('agama') is-invalid @enderror" name="agama">
                                        <option value="Islam"
                                            {{ $warga->agama === "Islam" ? "selected" : "" }}>
                                            Islam</option>
                                        <option value="Kristen"
                                            {{ $warga->agama === "Kristen" ? "selected" : "" }}>
                                            Kristen</option>
                                        <option value="Katolik"
                                            {{ $warga->agama === "Katolik" ? "selected" : "" }}>
                                            Katolik</option>
                                        <option value="Budha"
                                            {{ $warga->agama === "Budha" ? "selected" : "" }}>
                                            Budha</option>
                                        <option value="Hindu"
                                            {{ $warga->agama === "Hindu" ? "selected" : "" }}>
                                            Hindu</option>
                                    </select>
                                    @error('agama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Pekerjaan</label>
                                    <input class="form-control @error('pekerjaan') is-invalid @enderror" type="text"
                                        name="pekerjaan" value="{{ $warga->pekerjaan }}" id="example-search-input">
                                    @error('pekerjaan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Status Perkawinan</label>
                                    <select class="custom-select @error('status_perkawinan') is-invalid @enderror"
                                        name="status_perkawinan">

                                        <option value="Kawin"
                                            {{ $warga->status_nikah === "Kawin" ? "selected" : "" }}>
                                            Kawin</option>
                                        <option value="Tidak_kawin"
                                            {{ $warga->status_nikah === "Tidak_kawin" ? "selected" : "" }}>
                                            Tidak Kawin</option>

                                    </select>
                                    @error('status_perkawinan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Status Tinggal</label>
                                    <select class="custom-select @error('status_tinggal') is-invalid @enderror"
                                        name="status_tinggal">
                                        <option value="Tetap"
                                            {{ $warga->status_tinggal === "Tetap" ? "selected" : "" }}>
                                            Tetap</option>
                                        <option value="Kontrak"
                                            {{ $warga->status_tinggal === "Kontrak" ? "selected" : "" }}>
                                            Kontrak</option>
                                    </select>
                                    @error('status_tinggal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Blok</label>
                                    <input class="form-control @error('blok') is-invalid @enderror" type="text"
                                        name="blok" value="{{ $warga->blok }}" id="example-search-input">
                                    @error('blok')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-flat btn-warning mt-3">Update</button>
                                <a href="{{ route('warga') }}" class="btn btn-flat btn-primary mt-3">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

@endsection
