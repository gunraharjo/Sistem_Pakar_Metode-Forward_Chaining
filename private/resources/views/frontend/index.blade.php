@extends('frontend.template')
@section('content')



<body class="dark hi">
    <div class="container" align="center">
        <br />
        <br />
        <br />
        <h1 class="c"><b>Sistem Pakar Diagnosis</b></h1>
        <h2 class="c"><b>Gangguan Mental Pada Anak</b></h2>
        <h5 class="d">Menggunakan Metode Forward Chaining</h5>
        <br />
        <br />
        <br />
        <br />
        <p class="text-center">
            <a class="btn tombol btn-md btn-lg" href="{{ url('konsultasi', []) }}" role="button">
                <b>Mulai Konsultasi</b>
            </a>
        </p>
    </div>

</body>

</html>
@endsection