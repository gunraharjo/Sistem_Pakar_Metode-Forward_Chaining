<?php

namespace App\Http\Controllers;

use App\akun;
use Session;
use Illuminate\Http\Request;
use App\Mail\ForgorPassword;
use Illuminate\Support\Facades\Mail;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.login');
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
        if($request->has('nama')){
            $data = [
                "nama"=>$request->nama,
                "email"=>$request->email,
                "password"=>hash('gost-crypto',$request->password."SALTsistempakardiagnosamentalanak"),
                "no_hp"=>$request->no_hp,
                "alamat"=>$request->alamat,
                "jk"=>$request->jk
            ];
     
            akun::create($data);
            $id = akun::whereRaw("email = '".$request->email."'")->get();
            return view('frontend.login');
        }
        else{
            $data = akun::whereRaw("email ='".$request->email."'")->get();
            if(count($data)<1){
               return back()->WithErrors("Akun Dengan Email ".$request->email." Belum Terdaftar");
            }
            else{
                $email = $data[0]['email'];
                $password = $data[0]['password'];
                $HashedPassword = hash('gost-crypto',$request->password."SALTsistempakardiagnosamentalanak");
                if($request->email == $email && $password == $HashedPassword){
                    Session::push('nama',$data[0]['nama']);
                    Session::push('id',$data[0]['id']);
                    return redirect('');
                }
                else{
                    return back()->WithErrors("Password Anda Salah");
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
     * Remove the specified resource from storage.
     *
     * @param  \App\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy(akun $akun)
    {
        //
    }

    public function Logout(){
        Session::forget('nama');
        Session::forget('id');
        return redirect('');
    }

    public function lupaPassword(){
        return view('frontend.lupaPassword');
    }
    public function ResetPassword(Request $request){
        $check = akun::whereRaw("email = '".$request->email."'")->count();
        if($check>=1){
        $target = $request->email;
        $data = random_int('11111','99999');
            $data = ['data'=>$data];
        $HashedPassword = hash('gost-crypto',$data['data']."SALTsistempakardiagnosamentalanak");
        $update = ['password'=>$HashedPassword];
        akun::whereRaw("email = '".$request->email."'")->update($update);
        try {
            //code...
            Mail::to($target)->Send(new ForgorPassword($data));
            return redirect('/ganti');
        } catch (\Throwable $th) {
        // return "error";
        }
    }
    else{
        return back()->WithErrors("Email Anda Salah");
    }
    }
}
