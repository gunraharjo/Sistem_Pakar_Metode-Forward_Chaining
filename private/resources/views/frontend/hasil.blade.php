@extends('frontend.template')

@section('content')

<body class="dark hi">
    <style>
        td {
            color: black;
        }
    </style>
    @php
    use App\diagnosa;
    use App\gejala;
    use App\akun;
    @endphp
      @foreach ($data_penyakit as $item)
      @php
      $P = $item->kode_penyakit;
      $id = Session::get('id');
      $id = $id[0];
      $id_konsul = $item->id_konsultasi;
      $tanggal = date_format($item->created_at,"Y/m/d H:i A");
      @endphp
      @endforeach
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><b>Biodata Konsultasi : ( {{$id_konsul}} )</b></h3>
        </div>
      
        @php
        $user = akun::find($id);
        @endphp
        <table class="table table-bordered table-hover">
            <thead>
                <tr style="background-color: #535c68; color: #fff;">
                    <th>Nama</th>
                    <th>No. Hp</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tanggal Konsultasi</th>
                </tr>
            </thead>

            <tr>
                <td> {{$user->nama}} </td>
                <td>{{$user->no_hp}}</td>
                <td> @if ($user->jk=='L')
                    {{'Laki - Laki'}}
                    @else
                    {{'Perempuan'}}
                    @endif </td>
                <td>{{$user->alamat}}</td>
                <td> {{$tanggal}} </td>
            </tr>

        </table>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><b>Gejala Terpilih</b></h3>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr style="background-color: #535c68; color: #fff;">
                    <th>No</th>
                    <th>Nama Gejala</th>
                    <th>Status</th>
                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            @foreach ($data_penyakit as $dp)
            <tr>

                <td> {{$no}} </td>
                <td> @php
                    $nama_gejala = gejala::whereRaw("kode = '".$dp->kode_gejala."'")->get();
                    echo $nama_gejala[0]['nama_gejala'];
                    @endphp </td>
                <td> @if ($dp->status==1)
                    {{'IYA'}}
                    @else
                    {{'TIDAK'}}
                    @endif </td>

            </tr>
            @php
            $no++;
            @endphp
            @endforeach
        </table>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><b>Hasil Analisa</b></h3>
        </div>

        @php
        $analisa = diagnosa::whereRaw("kode = '".$P."'")->get();
        if(count($analisa)>=1){
        $analisa = $analisa[0];
        }
        else{
        $analisa = (object) array('nama_penyakit' => 'tidak diketahui', 'penyebab' => 'tidak diketahui', 'solusi' => 'tidak diketahui');
        }
        @endphp

        <div class="panel-body">
            <table class="table table-bordered">

                <tr>
                    <td><b>Penyakit : </b></td>
                    <td>{{$analisa->nama_penyakit}}</td>
                </tr>
                <tr>
                    <td><b> Penyebab : </b></td>
                    <td> {{$analisa->penyebab}} </td>
                </tr>
                <tr>
                    <td><b> Solusi : </b></td>
                    <td>{{$analisa->solusi}}</td>
                </tr>
            </table>
            <p>
                <a class="btn edit" href="{{ url('konsultasi', []) }}"><span class=""></span> Konsultasi Lagi</a>
                <a class="btn edit" href="{{ url('cetak', [$id_konsul]) }}"><span class=""></span> Cetak</a>
            </p>
        </div>



    </div>

    </div>

</body>
@endsection