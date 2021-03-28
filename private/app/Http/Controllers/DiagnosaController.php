<?php

namespace App\Http\Controllers;

use App\diagnosa;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = diagnosa::all();
        return view('backend.penyakit.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.penyakit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            "kode"=>$request->kode,
            "nama_penyakit"=>$request->nama,
            "penyebab"=>$request->penyebab,
            "solusi"=>$request->solusi
        ];
        diagnosa::create($data);
        return back()->WithErrors('Berhasil Tambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = diagnosa::where('kode',$id)->get();
        $data = $data[0];
       return view('backend.penyakit.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = diagnosa::find($id);
        return view('backend.penyakit.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            "kode"=>$request->kode,
            "nama_penyakit"=>$request->nama,
            "penyebab"=>$request->penyebab,
            "solusi"=>$request->solusi
        ];
        diagnosa::find($id)->update($data);
        return back()->WithErrors('Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        diagnosa::destroy($id);
        return back()->WithErrors('Berhasil Hapus Data');
    }
}
