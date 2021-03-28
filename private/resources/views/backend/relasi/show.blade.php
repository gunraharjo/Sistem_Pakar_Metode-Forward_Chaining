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
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Relasi {{$penyakit}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <a href="{{ url('admin/relasi/create', []) }}" class="btn btn-success">Tambah Data</a>
          <hr>
          <table id="example2" class="table table-bordered table-hover" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Penyakit</th>
                <th>Kode Gejala</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tbody>
              @php($i = 1)
              @foreach ($data as $item)
              <tr>
                <td>{{$i}}</td>
                <td><a href="{{ url('admin/penyakit', ["$item->kode_penyakit"]) }}">{{$item->kode_penyakit}}</a></td>
                <td><a href="{{ url('admin/gejala', ["$item->kode_gejala"]) }}">{{$item->kode_gejala}}</a></td>
                <td><a href="{{ url('admin/relasi/'.$item->id.'/edit', []) }}"><i style="color:#01307e;"
                      class="fas fa-edit"></i></a></td>
                <td>
                  <form method="POST" action="{{ url('admin/relasi', [$item->id]) }}">
                    @csrf 
                    @method('delete')
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'> <i class="fas fa-trash-alt"> </i></button>
                </form>
              </td>
              </tr>
              @php($i+=1)
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $('.show_confirm').click(function(e) {
        if(!confirm('Apakah anda ingin menghapus ini?')) {
            e.preventDefault();
        }
    });
</script>
  @endsection