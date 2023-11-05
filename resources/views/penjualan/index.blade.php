@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data penjualan</h3>
                            <a href="/penjualan/tambah" class="btn btn-primary">Tambah Data</a>
                            <a target="_blank" href="/penjualan/cetak" class="btn btn-success">CETAK LAPORAN</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Kasir</th>
                                            <th scope="col">Nama Member</th>
                                            <th scope="col">Sepatu</th>
                                            <th scope="col">Tanggal Bayar</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($penjualan as $u)
                                    <tbody>
                                        <tr>
                                            <td>{{ $u->id }}</td>
                                            <td>{{ $u->User->name }}</td>
                                            <td>{{ $u->Member->nama }}</td>
                                            <td>{{ $u->Sepatu->merk }} - {{ $u->Sepatu->nama_sepatu }}</td>
                                            <td>{{ $u->tgl_bayar}}</td>
                                            <td>Rp.{{number_format($u->jumlah_bayar,2,',','.')}}</td>
                                            <td>
                                                <a href="/penjualan/{{$u->id}}/edit"class="btn btn-warning">Edit</a>
                                                <a target="_blank" href="/penjualan/struk/{{$u->id}}" class="btn btn btn-success">Cetak</a>
                                                <a href="#" class="btn btn-danger" onClick="Delete('/penjualan/{{$u->id}}/hapus')">Hapus</a>
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