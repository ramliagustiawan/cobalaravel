{{-- ambilnya di layout file main --}}
@extends('layout/main')

        @section('title', 'Daftar Mahasiswa')


            @section('container')

              <div class="container">
                  <div class="row">
                      <div class="col-10">
                          <h1 class="mt-3">Daftar Mahasiswa</h1>

                          <table class="table mt-3">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="row">No</th>
                                <th scope="row">Nama</th>
                                <th scope="row">NRP</th>
                                <th scope="row">Email</th>
                                <th scope="row">Jurusan</th>
                                <th scope="row">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>

                                @foreach( $mahasiswa as $mhs)
                              <tr>
                              <th scope="row">{{ $loop->iteration}}</th>
                                <td >{{ $mhs->nama}}</td>
                                <td >{{ $mhs->nrp}}</td>
                                <td >{{ $mhs->email}}</td>
                                <td >{{ $mhs->jurusan}}</td>
                                <td >
                                    <a href="" class="badge badge-success">Edit</a>
                                    <a href="" class="badge badge-danger">Delete</a>
                                </td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>


                    </div>
                  </div>
              </div>
            @endsection




