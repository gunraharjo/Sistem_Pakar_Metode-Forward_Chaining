<?php

namespace App\Http\Controllers;

use App\gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = gejala::all();
        return view('backend.gejala.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gejala.create');
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
            "nama_gejala"=>$request->nama,
        ];
        gejala::create($data);
        return back()->WithErrors('Berhasil Tambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = gejala::where('kode',$id)->get();
        $data = $data[0];
       return view('backend.gejala.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $data = gejala::find($id);
        return view('backend.gejala.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            "kode"=>$request->kode,
            "nama_gejala"=>$request->nama,
        ];
        gejala::find($id)->update($data);
        return back()->WithErrors('Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        gejala::destroy($id);
        return back()->WithErrors('Berhasil Hapus Data');
    }
}
