@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tambah Data Penjualan</h3>
                        </div>
                        <div class="card-body">
                            <form action="/penjualan/simpan" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="">User</label>
                                    <select name="id_user" class="form-control">
                                        <option value="" disabled>-- Pilih User --</option>
                                        @foreach ( $user as $user )
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Member</label>
                                    <select name="id_member" class="form-control">
                                        <option value="" disabled>-- Pilih Member --</option>
                                        @foreach ( $member as $member )
                                            <option value="{{ $member->id }}">{{ $member->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>   

                                <div class="form-group">
                                    <label for="">Sepatu</label>
                                    <select name="id_sepatu" class="form-control">
                                        <option value="" disabled>-- Pilih Sepatu --</option>
                                        @foreach ( $sepatu as $sepatu )
                                            <option value="{{ $sepatu->id }}">{{ $sepatu->merk }}</option>
                                        @endforeach
                                    </select>
                                </div> 

                                      <div class="mb-3">
                                        <label for="" class="form-label">Tanggal</label>
                                        <input type="date"  name="tgl_bayar" id="" class="form-control" placeholder="Masukan merk" aria-describedby="helpId">
                                        @error('tgl_bayar')
                                        <div class="alert alert-danger">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">Jumlah</label>
                                        <input type="number"  name="jumlah_bayar" id="" class="form-control" placeholder="Masukan stok" aria-describedby="helpId">
                                        @error('jumlah_bayar')
                                        <div class="alert alert-danger">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                      
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form> 
                    </div>
                </div>
            </div>
       
    </section>
</div>
@endsection


