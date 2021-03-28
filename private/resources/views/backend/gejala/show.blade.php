@extends('backend.template')
@section('content')
<section class="py-5">
    <div class="container">
        <!-- FOR DEMO PURPOSE -->
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <header class="text-center pb-5">
                    <h1 class="h2"> {{$data->nama_gejala}} </h1>
                </header>
            </div>
        </div><!-- END -->


        <div class="row">
            <div class="col-lg-6 mx-auto">

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-search"></i></div>
                    <p class="mb-0 mt-2 font-italic">kode: {{$data->kode}}</p>
                   
                </blockquote><!-- END -->

            </div>
        </div>
    </div>
</section>
@endsection