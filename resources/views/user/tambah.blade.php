@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tambah Data User</h3>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="post" enctype="multipart/form-data">
                                @csrf
                                  <div class="mb-3">
                                      <label for="" class="form-label">Nama</label>
                                      <input type="text" name="name" id="" class="form-control" placeholder="Masukan Name" aria-describedby="helpId">
                                      @error('name')
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
                                    <div class="mb-3">
                                        <label for="" class="form-label">Username</label>
                                        <input type="text" name="username" id="" class="form-control" placeholder="Masukan User Name" aria-describedby="helpId">
                                        @error('username')
                                        <div class="alert alert-danger">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">Password</label>
                                        <input type="password" name="password" id="" class="form-control" placeholder="Masukan Name" aria-describedby="helpId">
                                        @error('password')
                                        <div class="alert alert-danger">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                      </div>
                                  
                                      <div class="mb-3">
                                        <label for="" class="form-label">Level</label>
                                        <select class="form-control" name="level" id="" >
                                            <option selected>Pilih satu</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Kasir">Kasir</option>
                                        </select>
                                        @error('level')
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