@extends('frontend.template')
@section('content')

<body class="dark hi">
    <div class="page-header">
        <h1 style="color: #fff;">Isi Data Konsultasi</h1>
    </div>
    <form action="{{ url('akun', []) }}" method="post">
        @csrf
        <div class="form-group" style="width: 400px">
            <p style="color: #fff;" align="left">
                <b>Nama</b> <span class="text-danger">*</span>
            </p>
            <p>
                <input class="form-control" style="width: 400px" type="text" required placeholder="Masukkan Nama. . ."
                    name="nama" id="nama" oninput="noSpecialCharacter('nama')" />
            </p>
        </div>
        <div class="form-group" style="width: 400px">
            <p style="color: #fff;" align="left">
                <b>Email</b> <span class="text-danger">*</span>
            </p>
            <p>
                <input class="form-control" style="width: 400px" type="email" required placeholder="Masukkan Email. . ."
                    name="email" />
            </p>
        </div>
        <div class="form-group" style="width: 400px">
            <p style="color: #fff;" align="left">
                <b>Password</b> <span class="text-danger">*</span>
            </p>
            <p>
                <input class="form-control" style="width: 400px" type="password" required placeholder="Masukkan Password. . ."
                    name="password" />
            </p>
        </div>
        <div class="form-group" style="width: 400px">
            <p style="color: #fff;" align="left">
                <b>No. Hp</b> <span class="text-danger">*</span>
            </p>
            <input style="color: #000;" class="form-control" type="number" name="no_hp" id="no_hp" oninput="onlyNumber('no_hp')" required
                placeholder="Masukkan Nomor Handphone" />
        </div>

        <div class="form-group" style="width: 400px">
            <p style="color: #fff;" align="left">
                <b>Jenis Kelamin</b> <span class="text-danger">*</span>
            </p>
            <p align="left">
                <input checked="checked" type="radio" name="jk" value="L"><b> Laki - Laki </b>
                <input  type="radio" name="jk" value="P"><b> Perempuan</b>
            </p>
        </div>
        <div class="form-group" style="width: 400px">
            <p style="color: #fff;" align="left">
                <b>Alamat</b> <span class="text-danger">*</span>
            </p>
            <input style="color: #000;" class="form-control" type="text" name="alamat" required
                placeholder="Masukkan Alamat" />
        </div>
        <br>
        <div>
            <button class="btn tambah" style="width: 300px">Lanjutkan <span
                    class="glyphicon glyphicon-arrow-right"></span>
            </button>
        </div>
    </form>
    </div>
    <script  type = "text/javascript">
        function noSpecialCharacter(ID) {
            var input = document.getElementById(ID);
            // var pattern = /\d+/g;;
            var pattern = /^[a-z]+$/i;
            if(!pattern.test(input.value)){
                var string = input.value.slice(0,-1);
                document.getElementById(ID).value = string;
            }
        }
        function onlyNumber(IDs){
            var inpud = document.getElementById(IDs);
            var patterns = /^-?\d+\.?\d*$/;
            if(!patterns.test(inpud.value)){
                var string = inpud.value.slice(0,-1);
                inpud.value = string;
            }
        }
    </script>

</body>

@endsection