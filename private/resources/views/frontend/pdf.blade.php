<head>

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
        width: 100%;
        color: #fff;
        font-weight: bold;
        font-size: 16px;
        background-color: #000000;
        text-align: center;
    }

    tbody {
        color: #fff;
        font-weight: bold;
        font-size: 12px;
        background-color: #333;
        text-align: center;
    }
    p{
        margin-bottom: -10px;
    }
</style>
</head>
<body class="dark hi">
    <div class="container" style="background-color: #ffffffaa">
        <div class="row" id="header">
            <p class="col-sm-12" id="textHeader">
                Sistem Pakar Diagnosa Gangguan Mental Pada Anak
            </p>
            <p class="col-sm-12" id="bottomHeader">
                (www.SistemPakarMentalAnak.com)
            </p>
            <br>
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
        <br>
        <hr>
        <h3 style="font-weight: bold">Hasil Diagnosa :</h3>
        <table class="table">
            <thead class="thead-light">
                <tr>
                <td>Nama Penyakit</td>
                <td>Penyebab</td>
                <td>Solusi</td>
            </tr>
            </thead>
            <tbody>
                <tr>
                <td> {{$penyakit['nama_penyakit']}} </td>
                <td>{{$penyakit['penyebab']}}</td>
                <td>{{$penyakit['solusi']}}</td>
            </tr>
            </tbody>
        </table>
        <hr>
        <h3 style="font-weight: bold">Gejala Terpilih :</h3>
        <table class="table">
            <thead>
                <tr>
                <td style="width: 5%">No</td>
                <td>Nama Gejala</td>
                <td>Status</td>
            </tr>
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
        <hr>
    </div>
</body>
