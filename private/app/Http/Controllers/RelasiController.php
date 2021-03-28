<?php

namespace App\Http\Controllers;

use App\relasi;
use App\diagnosa;
use App\gejala;
use Illuminate\Http\Request;

class RelasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyakit = diagnosa::all();
        $gejala = gejala::all();
        return view('backend.relasi.create',compact('penyakit','gejala'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cheking =  relasi::where('kode_penyakit',$request->kode_penyakit)->where('kode_gejala',$request->kode_gejala)->count();
        
        if($cheking==1){
            return back()->WithErrors('Error :: Relasi Itu Sudah ada!!');
        }
        else{
              $data = [
                "kode_penyakit"=>$request->kode_penyakit,
                "kode_gejala"=>$request->kode_gejala,
               ];
                relasi::create($data);
                return back()->WithErrors('Berhasil Tambah Data');
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\relasi  $relasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
       $kode =  diagnosa::select("kode")->find($id);
       $kode = $kode['kode'];
       $penyakit =  diagnosa::select("nama_penyakit")->find($id);
       $penyakit = $penyakit['nama_penyakit'];
       $data = relasi::where('kode_penyakit',$kode)->get();
       return view('backend.relasi.show',compact('data','penyakit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\relasi  $relasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gejala = gejala::all();
        $data = relasi::find($id);
        return view('backend.relasi.edit',compact('data','gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\relasi  $relasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            "kode_gejala" => $request->kode_gejala
        ];
        relasi::find($id)->update($data);
        return back()->WithErrors('Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\relasi  $relasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        relasi::destroy($id);
        return back()->WithErrors('Berhasil Hapus Data');
    }
}
