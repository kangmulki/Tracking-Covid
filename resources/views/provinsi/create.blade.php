@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Add Data Provinsi</b></div>
                <div class="card-body">
                  <!-- Form Create Data Provinsi -->
                <form action="{{route('provinsi.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                        <input type="text" name="kode_provinsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <br>
                        @error('kode_provinsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Provinsi</label>
                        <input type="text" name="provinsi" class="form-control" id="exampleInputPassword1">
                        <br>
                        @error('provinsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
