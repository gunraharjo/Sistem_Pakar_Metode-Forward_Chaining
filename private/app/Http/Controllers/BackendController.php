<?php

namespace App\Http\Controllers;

use App\backend;
use App\gejala;
use App\relasi;
use Illuminate\Http\Request;
use Auth;

class BackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      return view('backend.index');
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
     * @param  \App\backend  $backend
     * @return \Illuminate\Http\Response
     */
    public function show(backend $backend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\backend  $backend
     * @return \Illuminate\Http\Response
     */
    public function edit(backend $backend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\backend  $backend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, backend $backend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\backend  $backend
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
