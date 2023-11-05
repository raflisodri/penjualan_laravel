@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tambah Data Sepatu</h3>
                        </div>
                        <div class="card-body">
                            <form action="/sepatu/{{$sepatu->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                  <div class="mb-3">
                                      <label for="" class="form-label">id suplier</label>
                                      <input type="number" value="{{$sepatu->id_suplier}}" name="id_suplier" id="" class="form-control" placeholder="Masukan id suplier" aria-describedby="helpId">
                                    </div>
                                 
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama sepatu</label>
                                        <input type="text" value="{{$sepatu->nama_sepatu}}" name="nama_sepatu" id="" class="form-control" placeholder="Masukan Nama Sepatu" aria-describedby="helpId">
                                        @error('nama_sepatu')
                                        <div class="alert alert-danger">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">Merk</label>
                                        <input type="text" value="{{$sepatu->merk}}" name="merk" id="" class="form-control" placeholder="Masukan merk" aria-describedby="helpId">
                                        @error('merk')
                                        <div class="alert alert-danger">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">Stok</label>
                                        <input type="number" value="{{$sepatu->stok}}" name="stok" id="" class="form-control" placeholder="Masukan stok" aria-describedby="helpId">
                                        @error('stok')
                                        <div class="alert alert-danger">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                      <div class="mb-3">
                                      <label for="" class="form-label">Warna</label>
                                      <input type="text" value="{{$sepatu->warna}}" name="warna" id="" class="form-control" placeholder="Masukan warna" aria-describedby="helpId">
                                      @error('warna')
                                      <div class="alert alert-danger">
                                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          {{ $message }}
                                      </div>
                                      @enderror
                                    </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">Foto</label>
                                        <input type="file" name="foto" id="" class="form-control" placeholder="Masukan foto" aria-describedby="helpId">
                                      </div>                                      
                                    
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form> 
                    </div>
                </div>
            </div>
       
    </section>
</div>
@endsection