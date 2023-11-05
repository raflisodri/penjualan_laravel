@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data sepatu</h3>
                            <a href="/sepatu/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Suplier</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Merk</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Warna</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($sepatu as $u)
                                    <tbody>
                                        <tr>
                                            <td>{{ $u->id }}</td>
                                            <td>{{ $u->Suplier->nama_suplier }} - {{ $u->Suplier->nama_perusahaan }}</td>
                                            <td>{{ $u->nama_sepatu }}</td>
                                            <td>{{ $u->merk }}</td>
                                            <td>{{ $u->stok}}</td>
                                            <td>{{ $u->warna}}</td>
                                            <td align="center">
                                                <img class="img" style="height:500px width:500px" src="{{ asset("foto/$u->foto") }}" alt="">
                                            </td>
                                            <td>
                                                <a href="/sepatu/{{$u->id}}/edit"class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger" onClick="Delete('/sepatu/{{$u->id}}/hapus')">Hapus</a>
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