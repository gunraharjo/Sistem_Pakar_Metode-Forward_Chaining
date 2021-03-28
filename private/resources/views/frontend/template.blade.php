<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{ url('public/assets/css/yeti-bootstrap.min.css', []) }}" rel="stylesheet" />
    <link href="{{ url('public/assets/css/general.css', []) }}" rel="stylesheet" />
    <link href="{{ url('public/assets/css/select2.min.css', []) }}" rel="stylesheet" />
    <script src="{{ url('public/assets/js/jquery.min.js', []) }}"></script>
    <script src="{{ url('public/assets/js/bootstrap.min.js', []) }}"></script>
    <script src="{{ url('public/assets/js/select2.min.js', []) }}"></script>
    <title>Sistem Pakar Diagnosa Penyakit Mental Pada Anak</title>
    <script type="text/javascript">
        $(function(){
        $("select:not(.default)").select2();
      })         
    </script>
    <style type="text/css">
        .coeg {
            border-radius: 15px;
            border: 2px solid #000;
        }

        .hi {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('http://localhost/sistempakar/public/img/anak.jpg');

            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .dark {
            background-color: #000;
            color: #fff;
        }

        .refresh {
            background-color: #55efc4;
            color: #fff;
        }

        .refresh:hover {
            color: #fff;
            background-color: #00b894;
        }

        .tambah {
            background-color: #e67e22;
            color: #fff;
        }

        .tambah:hover {
            color: #fff;
            background-color: #d35400;
        }

        .edit {
            background-color: #3498db;
            color: #fff;
        }

        .edit:hover {
            color: #fff;
            background-color: #2980b9;
        }

        .hapus {
            background-color: #f0ad4e;
            color: #555555;
        }

        .hapus:hover {
            color: #555555;
            background-color: #d9534f;
        }

        .t {
            font-size: 15px;
            font-family: unset;
        }

        .latar {
            background-color: #636e72;
        }

        .tambah {
            background-color: #353b48;
        }

        .tambah:hover {
            background-color: #718093;
            color: #fff;
        }

        .edit {
            background-color: #2f3640;
        }

        .edit:hover {
            background-color: #718093;
            color: #fff;
        }

        .tombol {
            background-color: #2d3436;
            color: #fff;
            border-radius: 8px;
        }

        .tombol:hover {
            background-color: #fff;
            color: #2d3436;
            border-radius: 8px;
        }

        .trans {
            opacity: 1;
        }

        .modal-header {
            background-color: #2d3436;
        }

        .hehe {
            background-color: #2d3436;
        }

        .bulat {
            border-radius: 10px;
        }

        .page-header {
            color: #fff;
        }

        .latar {
            background-color: #636e72;
        }

        .tambah {
            background-color: #353b48;
        }

        .tambah:hover {
            background-color: #718093;
            color: #fff;
        }

        .edit {
            background-color: #2f3640;
        }

        .edit:hover {
            background-color: #718093;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('', []) }}" class="d"><b>Home</b></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('tentang', []) }}" class="t"><b>Tentang</b></a></li>
                       
            @php
            // use Session;
        @endphp
        @if (Session::has('nama'))
                    @php
                        $nama = Session::get('nama');
                    @endphp
                 <li><a href="{{ url('riwayat', []) }}" class="t"><b>Riwayat Konsultasi </b></a></li>  
                 <li><a href="{{ url('keluar', []) }} " class="t"><b>Logout</b></a></li>
                 <li> <a href=""  class="t">Welcome, {{$nama[0]}}</a> </li>
        @else
   
                <li><a href="{{ url('akun', []) }}" class="t"><b>Login</b></a></>
        </div>
        @endif
                 </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer" style="background-color: #333333; color: #fff;">
        <div class="container">
            <p> <span class="pull-left"><b>Deteksi Gangguan Mental Pada Anak</b></span>
                <span class="pull-right"><b>Metode Fordward Chaining</b></span>
            </p>
        </div>
    </footer>
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

</html>