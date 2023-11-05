@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data User</h3>
                            <a href="/user/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Tanggal daftar</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($user as $u)
                                    <tbody>
                                        <tr>
                                            <td>{{ $u->id }}</td>
                                            <td>{{ $u->name }}</td>
                                            <td align="center">
                                                <img class="img" style="height:300px width:300px" src="{{ asset("foto/$u->foto") }}" alt="">
                                            </td>
                                            <td>{{ $u->username }}</td>
                                            <td>{{ $u->level }}</td>
                                            <td>{{ $u->created_at }}</td>
                                            <td>
                                                <a href="/user/{{$u->id}}/edit"class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger" onClick="Delete('/user/{{$u->id}}/hapus')">Hapus</a>
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