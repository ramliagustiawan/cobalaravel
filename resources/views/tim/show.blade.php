{{-- ambilnya di layout file main --}}
@extends('layout/main')

        @section('title', 'Daftar Mahasiswa')


            @section('container')

              <div class="container">
                  <div class="row">
                      <div class="col-7">
                          <h1 class="mt-4">Detail Tim</h1>

                          <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">{{$tim->nama}}</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">{{$tim->nrp}}</h6>
                                  <p class="card-text">{{$tim->email}}</p>
                                  <p class="card-text">{{$tim->jurusan}}</p>

                                 {{-- edit --}}
                                <a href="{{$tim->id}}/edit" class="btn btn-primary">Edit</a>

                                {{-- delete --}}
                                <form action="/tim/{{$tim->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                 <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                                  <a href="/tim" class="card-link">Kembali</a>
                                </div>
                              </div>


                    </div>
                  </div>
              </div>
            @endsection




