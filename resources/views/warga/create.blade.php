@extends('layout.main')
@section('title','Tabel Warga')
@section('menu','Tambah Warga')
@section('body')

<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-6 col-ml-12">
            <div class="row">
                <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Tambah Warga</h4>
                            <form method="post" action="{{ url('dashboard') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <h4 class="header-title">A. Data Pribadi</h4>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">NIK</label>
                                    <input class="form-control @error('nik') is-invalid @enderror" type="number"
                                        name="nik" value="{{ old('nik') }}" id="example-text-input">
                                    @error('nik')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Nama</label>
                                    <input class="form-control @error('nama') is-invalid @enderror" type="text"
                                        name="nama" value="{{ old('nama') }}"
                                        id="example-search-input">
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-row align-items-center">
                                    <div class="col-sm-6 my-1">
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">Tempat Lahir</label>
                                            <input class="form-control @error('tempat_lahir') is-invalid @enderror" type="text"
                                                name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                                id="example-search-input">
                                            @error('tempat_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 my-1">
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">Tanggal Lahir</label>
                                            <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="date"
                                                name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                                id="example-search-input">
                                            @error('tanggal_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Jenis Kelamin</label>
                                    <select class="custom-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                        <option selected="selected">L/P</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <h4 class="header-title">B. Data Alamat</h4>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Alamat KTP</label>
                                    <input class="form-control @error('alamat_ktp') is-invalid @enderror" type="text"
                                        name="alamat_ktp" value="{{ old('alamat_ktp') }}"
                                        id="example-search-input">
                                    @error('alamat_ktp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-row align-items-center">
                                    <div class="col-sm-3 my-1">
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">RT</label>
                                            <input class="form-control @error('rt') is-invalid @enderror" type="number"
                                                name="rt" value="{{ old('rt') }}"
                                                id="example-search-input">
                                            @error('rt')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3 my-1">
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">RW</label>
                                            <input class="form-control @error('rw') is-invalid @enderror" type="number"
                                                name="rw" value="{{ old('rw') }}"
                                                id="example-search-input">
                                            @error('rw')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Desa/Kelurahan</label>
                                    <input class="form-control @error('desa') is-invalid @enderror" type="text"
                                        name="desa" value="{{ old('desa') }}"
                                        id="example-search-input">
                                    @error('desa')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Kecamatan</label>
                                    <input class="form-control @error('kecamatan') is-invalid @enderror" type="text"
                                        name="kecamatan" value="{{ old('kecamatan') }}"
                                        id="example-search-input">
                                    @error('kecamatan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Kabupaten/Kota</label>
                                    <input class="form-control @error('kabupaten') is-invalid @enderror" type="text"
                                        name="kabupaten" value="{{ old('kabupaten') }}"
                                        id="example-search-input">
                                    @error('kabupaten')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Provinsi</label>
                                    <input class="form-control @error('provinsi') is-invalid @enderror" type="text"
                                        name="provinsi" value="{{ old('provinsi') }}"
                                        id="example-search-input">
                                    @error('provinsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <h4 class="header-title">C. Data Lain-Lain</h4>

                                <div class="form-group">
                                    <label class="col-form-label">Agama</label>
                                    <select class="custom-select @error('agama') is-invalid @enderror" name="agama">
                                        <option selected="selected">-Pilih-</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                    </select>
                                    @error('agama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Pekerjaan</label>
                                    <input class="form-control @error('pekerjaan') is-invalid @enderror" type="text"
                                        name="pekerjaan" value="{{ old('pekerjaan') }}"
                                        id="example-search-input">
                                    @error('pekerjaan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Status Perkawinan</label>
                                    <select class="custom-select @error('status_perkawinan') is-invalid @enderror" name="status_perkawinan">
                                        <option selected="selected">-Pilih-</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Tidak_kawin">Tidak Kawin</option>
                                    </select>
                                    @error('status_perkawinan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Status Tinggal</label>
                                    <select class="custom-select @error('status_tinggal') is-invalid @enderror" name="status_tinggal">
                                        <option selected="selected">-Pilih-</option>
                                        <option value="Tetap">Tetap</option>
                                        <option value="Kontrak">Kontrak</option>
                                    </select>
                                    @error('status_tinggal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Blok</label>
                                    <input class="form-control @error('blok') is-invalid @enderror" type="text"
                                        name="blok" value="{{ old('blok') }}"
                                        id="example-search-input">
                                    @error('blok')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                
                                <button type="submit" class="btn btn-flat btn-primary mt-3">Simpan</button>
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
