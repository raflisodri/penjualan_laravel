@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tambah Data Suplier </h3>
                        </div>
                        <div class="card-body">
                            <form action="/suplier/simpan" method="post" enctype="multipart/form-data">
                                @csrf
                                  <div class="mb-3">
                                      <label for="" class="form-label">Nama</label>
                                      <input type="text" name="nama_suplier" id="" class="form-control" placeholder="Masukan Nama suplier" aria-describedby="helpId">
                                      @error('nama_suplier')
                                      <div class="alert alert-danger">
                                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          {{ $message }}
                                      </div>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama perusahaan</label>
                                        <input type="text" name="nama_perusahaan" id="" class="form-control" placeholder="Masukan nama perusahaan" aria-describedby="helpId">
                                        @error('nama_perusahaan')
                                        <div class="alert alert-danger">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" id="" class="form-control" placeholder="Masukan alamat" aria-describedby="helpId">
                                        @error('alamat')
                                        <div class="alert alert-danger">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">No telp</label>
                                        <input type="number" name="no_telp" id="" class="form-control" placeholder="Masukan Name" aria-describedby="helpId">
                                        @error('no_telp')
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
            </div>
        </div>
    </section>
</div>
@endsection