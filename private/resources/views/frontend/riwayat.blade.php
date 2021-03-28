@extends('frontend.template')

@section('content')
<style>
    thead{
        background-color: #eeeeee;
    }
    td{
        color: black;
    }

    tbody{
        background-color: cornsilk;
    }
</style>
    <body class="dark hi">
        <table class="table table-bordered table-hover">
            <thead>
                <td><h4><b>No</b></h4></td>
                <td><h4><b>ID Konsultasi</b></h4></td>
                <td><h4><b>Tanggal Konsultasi</b></h4></td>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($data as $item)
                    
             
               
                <tr> 
                    <td><a href="{{ url('riwayat', [$item->id_konsultasi]) }}"> <h4> <b> {{$i}}</b></h4>  </a>  </td>
                    <td><a href="{{ url('riwayat', [$item->id_konsultasi]) }}"><h4><b> {{$item->id_konsultasi}} </b></h4></a> </td>
                    <td><a href="{{ url('riwayat', [$item->id_konsultasi]) }}"><h4><b> {{date_format($item->created_at,"d:M:Y H:m A")}}</b></h4></a>  </td>
              
                </tr>
             
                @php
                    $i++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </body>
@endsection