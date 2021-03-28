<?php

namespace App\Http\Controllers;

use App\konsultasi;
use App\relasi;
use App\gejala;
use App\diagnosa;
use App\akun;
use App\histori;
use Session;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('nama')){
            Session::forget('kode');
            Session::forget('antikode');
            Session::forget('lc');
            $data = gejala::where('kode','G1')->get();
            $data = $data[0];
            return view('frontend.konsultasi',compact('data'));
        }
        else{
            return redirect('/akun');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //     $p1 = [1,2,3,4,6,13,18,21,22];
    //     $p2 = [2,3,4,6,14,15,22,23,24,25];
    //     $p3 = [2,3,5,9,10,13,14,15,16,17,23,24,25,26,27,40];
    //     $p4 = [1,2,4,5,6,7,8,11,12,16,18,19,21,28,38,41,42,45];
    //     $p5 = [1,2,4,5,6,7,8,9,10,14,16,18,19,20,26,43,44];
    //     $p6 = [1,4,5,7,8,9,10,11,12,13,17,19,20,27,28,29,30,31,32,33,34,35,36];
    //     $p7 = [1,3,11,12,15,17,29,31,46,47];
    //     $p8 = [1,3,11,12,20,30,32,33,34,35,36];
    //     $p9 = [7,8,9,37,38,39,48,49];
    //     $p10 = [5,10,37,39,50,51,52,53,54];
    //     $p = [
    //         '1'=>$p1,
    //         '2'=>$p2,
    //         '3'=>$p3,
    //         '4'=>$p4,
    //         '5'=>$p5,
    //         '6'=>$p6,
    //         '7'=>$p7,
    //         '8'=>$p8,
    //         '9'=>$p9,
    //         '10'=>$p10
    //     ];
    //     for($i=1;$i <= 10;$i++){      
    //         $g = 1;
    
    //     for($g=1;$g<=54;$g++){
    //         if(in_array($g,$p[$i])){
    //             $data = ['kode_penyakit'=>'P'.$i,'kode_gejala'=>'G'.$g];
    //             relasi::create($data);
    //         }
          
    //     }
    // }
    //     return relasi::all();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        function panggilGejala($value){
            $data = gejala::where('kode',$value)->get();
            $data = $data[0];
            return $data;
        }
        function ForceFinish(){
            
                 
                $id_konsultasi = random_int(1111111,9999999);
                $id_user = Session::get('id');
                $id_user = $id_user[0];
                $nama_penyakit = "Tidak Diketahui";
                if(Session::has('kode')){
                    $session = Session::get('kode');
                    foreach($session as $kode){
                    $dataHasil = ['id_konsultasi'=>$id_konsultasi,'id_user'=>$id_user,"kode_penyakit"=>$nama_penyakit,"kode_gejala"=>$kode];
                    histori::create($dataHasil);
                    }
                }
                if(Session::has('antikode')){
                    $antikode = Session::get('antikode');                    
                    foreach($antikode as $kode){
                        $dataHasil = ['id_konsultasi'=>$id_konsultasi,'id_user'=>$id_user,"kode_penyakit"=>$nama_penyakit,"kode_gejala"=>$kode,"status"=>0];
                        histori::create($dataHasil);
                    }
                 }
                 $data_penyakit = histori::whereRaw("id_konsultasi = '".$id_konsultasi."'")->get();
           
                return $id_konsultasi;
    
            }
      


//start here 


    if(Session::has('kode')){
        if($request->has('yes')){
        Session::push('kode',$request->kode);
        $session = Session::get('kode');
        $antikode = Session::get('antikode');
        $jumlah_session = count($session);
        $penyakit = diagnosa::all();
        $count = count($penyakit);
        $i = 0;
        $datas=[];
        $check = [];
        foreach($penyakit as $item){
       
           $relasi = relasi::select('kode_gejala')->whereRaw("kode_penyakit = '$item->kode'")->get();
           $datas['P'.($i+1)]=[];
           $check['P'.($i+1)]=[];
           foreach($relasi as $val){  
            array_push($datas['P'.($i+1)],$val->kode_gejala);
           }
           foreach($session as $val){
                
                if(in_array($val,$datas['P'.($i+1)])){ //[G4,G6] || [G1,G2,G3,G5]
                        if(Session::has('antikode')){
                        foreach($antikode as $ak){
                            if(in_array($ak,$datas['P'.($i+1)])){
                                array_push($check['P'.($i+1)],'false');
                            }else{
                                array_push($check['P'.($i+1)],'true');
                            }
                        } 
                    }
                    else{
                    array_push($check['P'.($i+1)],'true'); 
                    }                
                 }
                else{
                    array_push($check['P'.($i+1)],'false');
                }
           }
            $i++;
        }   
  
        $i=1;
     
        $lascheck=[];
        foreach($check as $item){
            if(in_array('false',$item)){
                $check['P'.$i] = ['false'];
            }
            else{
                array_push($lascheck,'P'.$i);
            }
            $i++;
        }
        
        Session::forget('lc');
        Session::push('lc',$lascheck[0]);
       if(count($lascheck)<1){
        // $id_konsultasi = ForceFinish();
        // return redirect('riwayat/'.$id_konsultasi);
        return $check;
       }
       else{
           if(count($lascheck)==2 && $lascheck[0]=="P4" && $session[$jumlah_session-1] == 'G8' ){
            $Currid = relasi::select('id')->whereRaw("kode_penyakit = 'P5' AND kode_gejala = '".$session[$jumlah_session-1]."'")->get();
           }
           else{
            $Currid = relasi::select('id')->whereRaw("kode_penyakit = '".$lascheck[0]."' AND kode_gejala = '".$session[$jumlah_session-1]."'")->get();
           }
            $Currid = $Currid[0];
           
            $nextid = $Currid->id+1;
            if(count($lascheck)==2 && $lascheck[0]=="P4" && $session[$jumlah_session-1] == 'G8' ){
                $dataNextRel = relasi::whereRaw("id = $nextid AND kode_penyakit = 'P5'")->get();
            }
            else{
                $dataNextRel = relasi::whereRaw("id = $nextid AND kode_penyakit = '".$lascheck[0]."'")->get(); 
            }
            if(count($dataNextRel)<1){
                $id_konsultasi = random_int(1111111,9999999);
                $id_user = Session::get('id');
                $id_user = $id_user[0];
                $nama_penyakit = $lascheck[0];
                foreach($session as $kode){
                $dataHasil = ['id_konsultasi'=>$id_konsultasi,'id_user'=>$id_user,"kode_penyakit"=>$nama_penyakit,"kode_gejala"=>$kode];
                histori::create($dataHasil);
                }
                if(Session::has('antikode')){
                    foreach($antikode as $kode){
                        $dataHasil = ['id_konsultasi'=>$id_konsultasi,'id_user'=>$id_user,"kode_penyakit"=>$nama_penyakit,"kode_gejala"=>$kode,"status"=>0];
                        histori::create($dataHasil);
                    }
                 }
                 $data_penyakit = histori::whereRaw("id_konsultasi = '".$id_konsultasi."'")->get();
           
                return redirect('riwayat/'.$id_konsultasi);
            }
            else{
            $dataNextRel = $dataNextRel[0];
            $data = gejala::whereRaw("kode = '$dataNextRel->kode_gejala'")->get();
            $data = $data[0];
            return view("frontend.konsultasi",compact('data'));

            }
            
       }
     
    }
        else{
            
            if($request->kode=='G2'){
                Session::push('antikode','G2');
                $data = panggilGejala('G3');
                return View('frontend.konsultasi',compact('data'));
            }
            else if($request->kode=='G3'){
                Session::push('antikode','G3');
                $check = Session::get('lc');
                $check = $check[0];
                if(Session::has('antikode')){
                $antikode = Session::get('antikode');
                    if(in_array("G1",$antikode)){
                        $id_konsultasi = ForceFinish();
                        return redirect('riwayat/'.$id_konsultasi);
                    }
               }
                if( $check == "P2" || $check == "P3"  || $check == "P7"
                 || $check == "P8" || $check == "P9"  || $check == "P10"  
                 ){
                    $id_konsultasi = ForceFinish();
                    return redirect('riwayat/'.$id_konsultasi);
                }
                $data = panggilGejala('G4');
                return View('frontend.konsultasi',compact('data'));
            }
            else if($request->kode=='G4'){
                Session::push('antikode','G4');
                $check = Session::get('lc');
                $check = $check[0];
                if($check == "P1" 
                 || $check == "P4"  || $check == "P5"  || $check == "P6"  || $check == "P7"
                 || $check == "P8" || $check == "P9"  || $check == "P10"  || $check == ""
                 ){
                    $id_konsultasi = ForceFinish();
                    return redirect('riwayat/'.$id_konsultasi);
                }
                $data = panggilGejala('G5');
                return View('frontend.konsultasi',compact('data'));
            }
            else if($request->kode=='G9'){
                Session::push('antikode','G9');
                $check = Session::get('lc');
                $check = $check[0];
             
                if($check == "P1" || $check == "P2" || $check == "P3" 
                 || $check == "P6"  || $check == "P7"
                 || $check == "P8" || $check == "P9"  || $check == "P10" || $check == ""  
                 ){
                    $id_konsultasi = ForceFinish();
                    return redirect('riwayat/'.$id_konsultasi);
                }
                $data = panggilGejala('G11');
                return View('frontend.konsultasi',compact('data'));
            }
            else if($request->kode=='G15'){
                Session::push('antikode','G15');
                $check = Session::get('lc');
                $check = $check[0];
                if($check == "P1" || $check == "P2" || $check == "P3" || $check == ""
                 || $check == "P4"  || $check == "P5"  || $check == "P6" || $check == "P9"  || $check == "P10"  
                 ){
                    $id_konsultasi = ForceFinish();
                    return redirect('riwayat/'.$id_konsultasi);
                }
                if($check == "P3"){
                    $id_konsultasi = ForceFinish();
                    return redirect('riwayat/'.$id_konsultasi);
                }
                $data = panggilGejala('G20');
                return View('frontend.konsultasi',compact('data'));
            }
            else{
                $id_konsultasi = ForceFinish();
                return redirect('riwayat/'.$id_konsultasi);
            }
        }
    
    }
    else{
        if($request->has('yes')){
       
        Session::push('kode',$request->kode);
                if($request->kode=='G5'){         
                    $data = panggilGejala('G10');
                    return View('frontend.konsultasi',compact('data'));
                }
                else if($request->kode=='G7'){
                    $data = panggilGejala('G8');
                    return View('frontend.konsultasi',compact('data'));
                }
                else if($request->kode=='G2'){          
                    $data = panggilGejala('G3');
                    return View('frontend.konsultasi',compact('data'));
                }else{
                         $data = panggilGejala('G2');
                        return View('frontend.konsultasi',compact('data'));
               
                }

        }
        else{
            if($request->kode=='G2'){
                Session::push('antikode','G2');
                $data = panggilGejala('G5');
                return View('frontend.konsultasi',compact('data'));
            }
            else if($request->kode=='G5'){
                Session::push('antikode','G5');
                $data = panggilGejala('G7');
                return View('frontend.konsultasi',compact('data'));
            }
            else if($request->kode=='G7'){
                Session::push('antikode','G7');
                $id_konsultasi = ForceFinish();
                return redirect('riwayat/'.$id_konsultasi);
            }
            else{
                Session::push('antikode','G1');
                $data = panggilGejala('G2');
                return View('frontend.konsultasi',compact('data'));
            }
        }
    }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Session::forget('kode');
        Session::forget('antikode');
        Session::forget('lc');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ["G1","G2","G3","G5","G9"];
        $session = ["G1","G2","G3","G5","G9"];
        $antisession = ["G4","G6"];
        $i=1;
        foreach($session as $ss){
            if(in_array($ss,$data)){
                print_r($i.". true");
                foreach($antisession as $as){
                    if(in_array($as,$data)){
                        print_r($i." False");
                    }else{
                        print_r($i." True--");
                    }
                }
            }
            $i++;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, konsultasi $konsultasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(konsultasi $konsultasi)
    {
        //
    }
   
}
