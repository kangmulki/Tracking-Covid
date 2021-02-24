@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Add Data Kecamatan</b></div>
                <div class="card-body">
                  <!-- Form Create Data Provinsi -->
                <form action="{{route('kecamatan.store')}}" method="POST">
                    @csrf
                          <div class="mb-3">
                              <label for="disabledSelect" class="form-label">Kota</label>
                              <select id="disabledSelect" class="form-control" name="id_kota">
                              @foreach($kota as $data)
                                <option value="{{$data->id}}">{{$data->kota}}</option>
                              @endforeach
                              </select>
                          </div>
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                                <input type="text" name ="kecamatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           </div>
                      <button type="submit" class="btn btn-outline-success float-right">Add  Data</button>
              </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

