@extends('frontend.template')
@section('content')
<style>
    #textHeader {
        color: #000000;
        text-align: center;
        font-weight: bold;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 1em;
        margin-top: 2%;
    }

    #bottomHeader {
        color: #000000;
        text-align: center;
        font-weight: bold;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 0.8em;
    }

    hr {
        background-color: #000000;
        height: 1px;
    }

    #text {
        color: #000000;
        font-weight: bold;
    }

    table {
        color: #eee;
        font-weight: bold;
        font-size: 16px;
        background-color: #000000;
    }

    tbody {
        color: #fff;
        font-weight: bold;
        font-size: 12px;
        background-color: #333;
    }
</style>

<body class="dark hi">
    <div class="container" style="background-color: #ffffffaa">
        <div class="row" id="header">
            <p class="col-sm-12" id="textHeader">
                Sistem Pakar Diagnosa Gangguan Mental Pada Anak

            </p>
            <p class="col-sm-12" id="bottomHeader">
                (www.SistemPakarMentalAnak.com)
            </p>
        </div>
        <hr>
        <div class="row" id="ket">
            <p id="text" class="col-md-12">
                Id konsultasi : {{$id}}
            </p>
            <p id="text" class="col-md-12">
                Nama Pasien : {{$pasien->nama}}
            </p>
            <p id="text" class="col-md-12">
                Tanggal Konsultasi : {{$tanggal->format("d M Y")}}
            </p>
        </div>
        <h4 id="text">Hasil Diagnosa :</h4>
        <table class="table">
            <thead>
                <td>Nama Penyakit</td>
                <td>Penyebab</td>
                <td>Solusi</td>
            </thead>
            <tbody>
                <td> {{$penyakit['nama_penyakit']}} </td>
                <td>{{$penyakit['penyebab']}}</td>
                <td>{{$penyakit['solusi']}}</td>
            </tbody>
        </table>
        <hr>
        <h4 id="text">Gejala Terpilih :</h4>
        <table class="table">
            <thead>
                <td>No</td>
                <td>Nama Gejala</td>
                <td>Status</td>
            </thead>
            <tbody>
                @php
                use App\gejala;
                $i = 1;
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td> {{$i}} </td>
                    <td>
                        @php
                        $namaGejala = gejala::select("nama_gejala")->where("kode",$item->kode_gejala)->get();
                        $namaGejala = $namaGejala[0];
                        @endphp
                        {{$namaGejala->nama_gejala}}
                    </td>
                    <td> @if ($item->status == 1)
                        {{"IYA"}}
                        @else
                        {{"TIDAK"}}
                        @endif </td>
                    @php
                    $i++;
                    @endphp
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row" id="button">
            <div class="col-sm-1" style="margin-right: 10px;">
                <a class="btn btn-success" href="{{ url('cetak/'.$id."/edit", []) }}">Cetak PDF</a>
            </div> 
            <div class="col-sm-2">
                <a class="btn btn-warning" href="{{ url('sendMail', [$id]) }}">Kirim Email</a>
            </div> 
        </div>
        <hr>
    </div>
</body>
@endsection