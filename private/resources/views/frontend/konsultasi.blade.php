@extends('frontend.template')

@section('content')
<body class="dark hi" >
    <div class="page-header">
        <h1 align="center"><b>Konsultasi</b></h1>
    </div>
  
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><b>Riwayat Pertanyaan</b></h3>
        </div>
        <div class="list-group">
            
        </div>    
    </div>

    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title" align="center"><b>Jawablah pertanyaan berikut ini [{{$data->kode}}]</b></h3></div>
        <div class="panel-body" style="background-color: #535c68; color: #fff;">
         <h3 align="center"><b>Apakah {{$data->nama_gejala}}?</b></h3>
            <form action="{{ url('konsultasi', []) }}" method="post">
                @csrf
                <input type="hidden" name="kode" value="{{$data->kode}}" />
                <p>&nbsp;</p>
                <p align="center">
                    <button name="yes" class="btn tambah" value="1"><span class="glyphicon glyphicon-ok-sign"></span> Ya</button>
                    <button name="no" class="btn tambah" value="1"><span class="glyphicon glyphicon-remove-sign"></span> Tidak</button> 
                </p>
            </form>
        </div>
    </div>
   
    
    </body>
@endsection