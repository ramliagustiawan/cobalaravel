<?php

namespace App\Http\Controllers;

use App\tim;
use Illuminate\Http\Request;

class TimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tim = tim::all();
        return view('tim.index', ['tim' => $tim]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tim.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cara 1
        // $tim = new tim;
        // $tim->nama = $request->nama;
        // $tim->nrp = $request->nrp;
        // $tim->email = $request->email;
        // $tim->jurusan = $request->jurusan;

        // $tim->save();

        // cara 2
        // tim::create([
        //     'nama' => $request->nama,
        //     'nrp' => $request->nrp,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan

        // ]);

        // cara 3
        // slangkah awal validasi
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:8',
            'email' => 'email:rfc,dns',
            'jurusan' => 'required'
        ]);

        // kemudian insert ke database
        tim::create($request->all());
        return redirect('/tim')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function show(tim $tim)
    {
        return view('tim.show', ['tim' => $tim]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function edit(tim $tim)
    {

        //
        return view('tim.edit', compact('tim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tim $tim)
    {
        //
        tim::where('id', $tim->id)->update([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'jurusan' => $request->jurusan,

        ]);
        return redirect('/tim')->with('status', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function destroy(tim $tim)
    {
        //
        tim::destroy($tim->id);
        return redirect('/tim')->with('status', 'Data Berhasil di Hapus');
    }
}
