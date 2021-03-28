<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Cetak;
use App\histori;
use App\akun;
use Illuminate\Support\Facades\Mail;

class CetakEmailController extends Controller
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
 
        $akun = histori::where("id_konsultasi",$id)->get();
        foreach($akun as $item){
            $id_user = $item->id_user;
        }
        $pasien = akun::find($id_user);
        $target = $pasien['email'];
        $data = ['data'=>$id]; 
        try {
            //code...
            Mail::to($target)->Send(new Cetak($data));
            return redirect('cetak/'.$id);
        } catch (\Throwable $th) {
        return $th;
        }
        // return back()->WithErrors("Email Terkirim");
        // return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
