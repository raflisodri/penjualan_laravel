@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data Member</h3>
                            <a href="/member/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No telp</th>
                                            <th scope="col">Tanggal daftar</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($member as $u)
                                    <tbody>
                                        <tr>
                                            <td>{{ $u->id }}</td>
                                            <td>{{ $u->nama }}</td>
                                            <td>{{ $u->alamat }}</td>
                                            <td>{{ $u->no_telp }}</td>
                                            <td>{{ $u->created_at }}</td>
                                            <td>
                                                <a href="/member/{{$u->id}}/edit"class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger" onClick="Delete('/member/{{$u->id}}/hapus')">Hapus</a>
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