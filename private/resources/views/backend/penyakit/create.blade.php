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
                    <h3 class="card-title"> <b> {{'Tambah Data'}} </b> </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url('admin/penyakit', []) }}" method="POST">
                        @csrf
                        <label for="kode">Kode Penyakit</label>
                        <input type="text" name="kode"  class="form-control" required>
                        <hr>
                        <label for="nama">Nama Penyakit</label>
                        <input type="text" name="nama" class="form-control" required>
                        <hr>
                        <label for="nama">Penyebab</label>
                        <input type="text" name="penyebab" class="form-control" required>
                        <hr>
                        <label for="solusi">Solusi</label>
                        <input type="text" name="solusi"  class="form-control" required>
                        <hr>
             
                        <input type="submit" value="Tambah Data" class="btn btn-success" style="width: 35%">
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    @endsection