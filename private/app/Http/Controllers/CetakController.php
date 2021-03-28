<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\histori;
use App\diagnosa;
use App\akun;


class CetakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = histori::where('id_konsultasi',"9345170")->get();
        // $pdf = PDF::loadview("frontend.cetak",[]);
        // return view("frontend.cetak");
        // return $pdf->download('laporan-pegawai-pdf.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  histori::where("id_konsultasi",$id)->get();
        if(count($data)<1){
            return abort(404);

        }else{
            foreach($data as $item){
                $id_user = $item->id_user;
                $kode = $item->kode_penyakit;
                $tanggal = $item->created_at;
            }
            $pasien = akun::find($id_user);
            $penyakit = diagnosa::where("kode",$kode)->get();
            if(count($penyakit)<1){
                $penyakit = [
                    "nama_penyakit"=>"tidak diketahui",
                    "penyebab"=>"tidak diketahui",
                    "solusi"=>"tidak diketahui"
                ];
            }else{
                $penyakit = $penyakit[0];
            }
            return view("frontend.cetak",compact('data','id','pasien','penyakit','tanggal'));
         
        }
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  histori::where("id_konsultasi",$id)->get();
        if(count($data)<1){
            return abort(404);

        }else{
            foreach($data as $item){
                $id_user = $item->id_user;
                $kode = $item->kode_penyakit;
                $tanggal = $item->created_at;
            }
            $pasien = akun::find($id_user);
            $penyakit = diagnosa::where("kode",$kode)->get();
            if(count($penyakit)<1){
                $penyakit = [
                    "nama_penyakit"=>"tidak diketahui",
                    "penyebab"=>"tidak diketahui",
                    "solusi"=>"tidak diketahui"
                ];
            }else{
                $penyakit = $penyakit[0];
            }
            $pdf = PDF::loadview("frontend.pdf",["data"=>$data,"id"=>$id,"pasien"=>$pasien,"penyakit"=>$penyakit,"tanggal"=>$tanggal]);
            return $pdf->download($id.'.pdf',compact('data','id','pasien','penyakit','tanggal'));
            // return view("frontend.cetak",compact('data','id','pasien','penyakit','tanggal'));
         
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
