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
          <h3 class="card-title">Riwayat Konsultasi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
         
     
          <table id="example2" class="table table-bordered table-hover" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Id konsultasi</th>
                <th>Tanggal Konsultasi</th>
              </tr>
            </thead>
            <tbody>
                @php($i = 1)
              @foreach ($data as $item)
              <tr>
                <td>{{$i}}</td>
                <td><a href="{{ url('cetak', ["$item->id_konsultasi"]) }}">{{$item->id_konsultasi}}</a></td>
                <td>{{$item->created_at->format("d M Y")}}</td>
              </tr>
              @php($i+=1)
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
  {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $('.show_confirm').click(function(e) {
        if(!confirm('Apakah anda ingin menghapus ini?')) {
            e.preventDefault();
        }
    });
</script> --}}
@endsection