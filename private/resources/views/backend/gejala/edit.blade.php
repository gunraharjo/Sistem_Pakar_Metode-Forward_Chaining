@extends('backend.template')
@section('content')
<div class="container-fluid">

    <div class="row">
        @if($errors->any())
        <div class="container">
            <div style="background-color:rgb(34, 143, 59)" class="col-12">
                <h4 style="color:white">{{$errors->first()}}</h4>
            </div>
        </div>
        @endif
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> <b> {{$data->nama_gejala}} </b> </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url('admin/gejala', [$data->id]) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <label for="kode">Kode gejala</label>
                        <input type="text" name="kode" value="{{$data->kode}}" class="form-control" required>
                        <hr>
                        <label for="nama">Nama gejala</label>
                        <input type="text" name="nama" value="{{$data->nama_gejala}}" class="form-control" required>
                        <hr>
                        <input type="submit" value="update" class="btn btn-success" style="width: 35%">
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    @endsection