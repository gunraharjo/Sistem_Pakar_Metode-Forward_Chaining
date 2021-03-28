<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\akun;

class ChangePwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('frontend.ChangePassword');
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
        function enkripsi($foo){
            $hash = hash('gost-crypto',$foo."SALTsistempakardiagnosamentalanak");
            return $hash;
         }
 
        $email = $request->email;
        $passwordLama = $request->passwordLama;
        $passwordBaru = $request->passwordBaru;
        $passwordLama = enkripsi($passwordLama);
        $passwordBaru = enkripsi($passwordBaru);
     
        $check = akun::whereRaw("email = '".$email."' and password = '".$passwordLama."'")->count();
        
        if($check>=1){
            $data = ["password"=>$passwordBaru];
         akun::whereRaw("email = '".$email."' and password = '".$passwordLama."'")->update($data);
         return back()->WithErrors("Berhasil Ganti Password");
        }
        else{
         return back()->WithErrors("Email atau Password Lama Anda Salah");
        }
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
