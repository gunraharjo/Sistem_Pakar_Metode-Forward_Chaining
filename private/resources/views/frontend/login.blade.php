@extends('frontend.template')

@section('content')
<body class="dark hi">
    <div class="container">
        <div class="page-header">
    <h1>Login</h1>
</div>
<div class="row">
  
    <div class="col-md-4">       
       
        <form method="post" action="{{ url('akun', []) }}">     
            @csrf                   
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" required name="email" autofocus />
            </div>
            <div class="form-group">            
                <label>Password</label>
                <input type="password" id="inputPassword" class="form-control" required placeholder="Password" name="password" />  
            </div> 
            <a style="color: white" class="col md-6" href="{{ url('lupaPassword', []) }}"><h4>Lupa Password?</h4> </a>
            @if($errors->any())
            <div class="container">
                <div style="background-color:rgb(211, 13, 23); width: 30%" class="col md-4">
                    <h4 style="color:white">{{$errors->first()}}</h4>
                </div>
            </div>
            @endif
            <div class="form-group">                
                <button style="width: 100%" class="btn edit" type="submit"><span class=""></span> Masuk</button>
            </div>        
        </form> 
        
        <h4 class="col md-6">Tidak Punya Akun? </h4>  
        <a href="{{ url('register', []) }}" class="btn edit" style="width: 50%"  type="submit"><span class=""></span> Register</a> 
    </div>

</div> 
  </div>
  </body>
@endsection