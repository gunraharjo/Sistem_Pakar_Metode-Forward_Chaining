<?php

namespace App\Http\Controllers;

use App\histori;
use Session;
use Illuminate\Http\Request;

class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Session::get('id');
        $id = $id[0];
        $data = histori::where('id_user',$id)->groupBy('id_konsultasi')->orderBy('id','desc')->get();
        return view('frontend.riwayat',compact('data'));
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
     * @param  \App\histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_penyakit = histori::where('id_konsultasi',$id)->get();
        return view("frontend.hasil",compact('data_penyakit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function edit(histori $histori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, histori $histori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function destroy(histori $histori)
    {
        //
    }
}
