{{-- ambilnya di layout file main --}}
@extends('layout/main')

        @section('title', 'Daftar Mahasiswa')


            @section('container')

              <div class="container">
                  <div class="row">
                      <div class="col-7">
                          <h1 class="mt-4">Daftar Tim</h1>

                          <a href="/tim/create" class="btn btn-primary my-3">Tambah Data</a>

                          {{-- pesan berhasil --}}
                          @if (session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                          @endif

                          <ul class="list-group ">

                            @foreach($tim as $tm)

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              {{$tm->nama}}
                             <a href="/tim/{{$tm->id}}" class="badge badge-info">Detail</a>
                            </li>

                            @endforeach

                          </ul>


                    </div>
                  </div>
              </div>
            @endsection




