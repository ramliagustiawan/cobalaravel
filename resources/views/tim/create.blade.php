{{-- ambilnya di layout file main --}}
@extends('layout/main')

        @section('title', 'Form Tambah Data')


            @section('container')

              <div class="container">
                  <div class="row">
                      <div class="col-8">
                          <h1 class="mt-4">Form Tambah Data</h1>

                          <form method="post" action="/tim">
                            {{-- cara mengamankan dengan csrf --}}
                            @csrf

                                <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
                                  {{-- pesan error --}}
                                  @error('nama')
                                  <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                  @enderror

                                </div>
                                <div class="form-group">
                                  <label for="nrp">Nrp</label>
                                <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan nrp" name="nrp" value="{{old('nrp')}}">

                                   {{-- pesan error --}}
                                   @error('nrp')
                                   <div class="invalid-feedback">
                                     {{$message}}
                                   </div>
                                   @enderror
                                </div>
                                <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{old('email')}}">

                                   {{-- pesan error --}}
                                   @error('email')
                                   <div class="invalid-feedback">
                                     {{$message}}
                                   </div>
                                   @enderror
                                </div>
                                <div class="form-group">
                                  <label for="jurusan">Jurusan</label>
                                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{old('jurusan')}}">

                                   {{-- pesan error --}}
                                   @error('jurusan')
                                   <div class="invalid-feedback">
                                     {{$message}}
                                   </div>
                                   @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Tambah Data</button>

                              </form>


                    </div>
                  </div>
              </div>
            @endsection




