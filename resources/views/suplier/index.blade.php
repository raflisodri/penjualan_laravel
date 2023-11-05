@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data Suplier</h3>
                            <a href="/suplier/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Nama Perusahaan</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No telp</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($suplier as $u)
                                    <tbody>
                                        <tr>
                                            <td>{{ $u->id }}</td>
                                            <td>{{ $u->nama_suplier }}</td>
                                            <td>{{ $u->nama_perusahaan }}</td>
                                            <td>{{ $u->alamat }}</td>
                                            <td>{{ $u->no_telp }}</td>
                                 
                                            <td>
                                                <a href="/suplier/{{$u->id}}/edit"class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger" onClick="Delete('/suplier/{{$u->id}}/hapus')">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection