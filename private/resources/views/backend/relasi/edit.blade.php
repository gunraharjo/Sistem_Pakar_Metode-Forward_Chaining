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
                    <h3 class="card-title"> <b>Edit {{$data->kode_penyakit}} & {{$data->kode_gejala}} </b> </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ url('admin/relasi', [$data->id]) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <label for="nama">Kode gejala</label>
                        <select name="kode_gejala" class="form-control">
                            @foreach ($gejala as $item)
                                <option value="{{$item->kode}}" @if ($item->kode==$data->kode_gejala)
                                    {{"selected"}}
                                @endif>{{$item->kode}}</option>
                            @endforeach
                        </select>
                        <hr>
                        <label for="kode">Kode penyakit</label>
                        <input type="text" name="kode_penyakit" value="{{$data->kode_penyakit}}" class="form-control" disabled required>
                        <hr>            
                        <input type="submit" value="update" class="btn btn-success" style="width: 35%">
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    @endsection