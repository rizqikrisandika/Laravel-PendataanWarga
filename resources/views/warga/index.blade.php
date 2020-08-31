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
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>L/P</th>
                            <th>Usia</th>
                            <th>Pekerjaan</th>
                            <th>Kawin</th>
                            <th>Status</th>
                            <th>Blok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($warga as $warga)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $warga->nik }}</td>
                            <td>{{ $warga->nama }}</td>
                            <td>{{ $warga->jenis_kelamin }}</td>
                            <td></td>
                            <td>{{ $warga->pekerjaan }}</td>
                            <td>{{ $warga->status_nikah }}</td>
                            <td>{{ $warga->status_tinggal }}</td>
                            <td>{{ $warga->blok }}</td>
                            <td>
                                <a class="btn btn-flat btn-warning" href="{{ route('edit.warga',$warga->id) }}"><i class="fa fa-edit"></i></a>
                                <form action="{{ route('delete.warga',$warga->id) }}" class="d-inline" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-flat btn-danger" href=""><i class="fa fa-trash"></i></button>
                                </form>
                                <a class="btn btn-flat btn-primary" href="#"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection