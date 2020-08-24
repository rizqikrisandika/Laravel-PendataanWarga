@extends('layout.main')
@section('title','Tabel Warga')
@section('menu','Data Warga')
@section('body')
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Warga</h4>
            <a href="{{ route('create.warga') }}" class="btn btn-flat btn-primary mb-3">Tambah Warga</a>
            <div class="data-tables datatable-primary">
                <table id="dataTable2" class="text-center">
                    <thead class="text-capitalize">
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>L/P</th>
                            <th>Usia</th>
                            <th>Pendidikan</th>
                            <th>Pekerjaan</th>
                            <th>Kawin</th>
                            <th>Status</th>
                            <th>Blok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection