{{-- ambilnya di layout file main --}}
@extends('layout.main')

        @section('title', 'About')


            @section('container')

              <div class="container">
                  <div class="row">
                      <div class="col-10">
                      <h1 class="mt-3">Halaman About! {{$nama}}</h1>
                    </div>
                  </div>
              </div>
            @endsection




