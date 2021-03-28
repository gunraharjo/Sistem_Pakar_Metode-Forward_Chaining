@extends('frontend.template')

@section('content')
    
<body class="dark hi">
    <div class="container">
        <div class="page-header">
    <h1>Reset Password</h1>
</div>
<div class="row">
  
    <div class="col-md-4">       
       
        <form method="post" action="{{ url('ResetAkun', []) }}">     
            @csrf                   
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" required name="email" autofocus />
            </div>
            @if($errors->any())
            <div class="container">
                <div style="background-color:#008040); width: 30%" class="col md-4">
                    <h4 style="color:white">{{$errors->first()}}</h4>
                </div>
            </div>
            @endif
            <div class="form-group">                
                <button style="width: 100%" class="btn edit" type="submit"><span class=""></span> Kirim Email</button>
            </div>        
        </form> 

</div> 
  </div>
  </body>
@endsection