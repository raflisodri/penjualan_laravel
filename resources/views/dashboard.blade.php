@section('content')
@extends('master')
<div class="content-wrapper pb-0">
    <div class="page-header flex-wrap">
        {{-- <h3 class="mb-0"> Hi, welcome back! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block"> {{ Auth()->User()->name }}</span> --}}
        </h3>
        <div class="d-flex">
            <button type="button" class="btn btn-sm bg-white btn-icon-text border">
                <i class="mdi mdi-email btn-icon-prepend"></i> Email </button>
            <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
            <button type="button" class="btn btn-sm ml-3 btn-success"> Add User </button>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
            <div class="row">
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Jumlah transaksi</p>
                                    <h2 class="text-white"> <span class="h5">
                                        @if($total_minggu->total_price == null)
                                        0
                                        @else
                      
                                        <td>Rp.{{number_format($total_minggu->total_price,2,',','.')}}</td>
                                        @endif

                                    </span>
                                    </h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                            </div>
                            <h6 class="text-white">Hasil Transaksi Selama (7) Hari</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Jumlah sepatu</p>
                                    <h2 class="text-white"> {{$jumlah_sepatu}}<span class="h5"></span>
                                    </h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                            </div>
                            <h6 class="text-white">Jumlah seluruh sepatu </h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Jumlah user</p>
                                    <h2 class="text-white"> {{$jumlah_user}}<span class="h5"></span>
                                    </h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                            </div>
                            <h6 class="text-white">Jumlah pengguna (admin dan kasir)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                    <div class="card bg-success">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Jumlah member</p>
                                    <h2 class="text-white">{{$jumlah_member}}</h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
                            </div>
                            <h6 class="text-white">Jumlah member(aktif berlangganan)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 stretch-card grid-margin">
            <div class="card">
                <div class="card-header">
                   <h3> HISTORY PENJUALAN</h3>
                </div>
                <div class="card-body">
                    
                    <table class="table table" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Kasir</th>
                                <th scope="col">Nama Member</th>
                                <th scope="col">Sepatu</th>
                                <th scope="col">Tanggal Bayar</th>
                                <th scope="col">Jumlah</th>
                         
                            </tr>
                        </thead>
                        @foreach ($penjualan as $u)
                        <tbody>
                            <tr>
                                <td>{{ $u->id }}</td>
                                <td>{{ $u->User->name }}</td>
                                <td>{{ $u->Member->nama }}</td>
                                <td>{{ $u->Sepatu->merk }}</td>
                                <td>{{ $u->tgl_bayar}}</td>
                                <td>Rp.{{number_format($u->jumlah_bayar,2,',','.')}}</td>
                            
                            </tr>
                        </tbody>
                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection