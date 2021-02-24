@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Show Data Provinsi</b></div>
                <div class="card-body">
                  <!-- Form Create Data Provinsi -->
                <form action="" method="POST">
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                        <input type="text" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Provinsi</label>
                        <input type="text" name="provinsi" value="{{$provinsi->provinsi}}" class="form-control" id="exampleInputPassword1" disabled>
                        <br>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
