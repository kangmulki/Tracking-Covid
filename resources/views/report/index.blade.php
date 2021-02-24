@extends('layouts.master')

@section('content')
<div class="container">

<p><h1> <center> ~ COVID-19 di Indonesia ~</center></h1></p><br>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-warning "> <center><h4><b>Total Positif</b></h4></center> </div>
                <div class="card-body">
                  
                        <p><h2><b>{{ $positif }}</b></h2><h5> Orang</h5></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-success"> <center><h4><b>Total Sembuh</b></h4></center> </div>
                <div class="card-body">
                        <p><h2><b>{{ $sembuh }}</b></h2><h5> Orang</h5></p>
              
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-danger"> <center><h4><b>Total Meninggal</b></h4></center> </div>
                <div class="card-body">
                <p><h2><b>{{ $meninggal }}</b></h2><h5> Orang</h5></p>
                
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

