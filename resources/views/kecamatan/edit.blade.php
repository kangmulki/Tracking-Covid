@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Edit Data Kecamatan</b></div>
                <div class="card-body">
                  <!-- Form Create Data Provinsi -->
                <form action="{{route('kecamatan.update', $kecamatan->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                          <div class="mb-3">
                              <label for="disabledSelect" class="form-label">Kota</label>
                              <select id="disabledSelect" class="form-control" name="id_kota">
                              @foreach($kota as $data)
                                <option value="{{$data->id}}" {{ $data->id == $kecamatan->id_kota ? 'selected' : '' }} >{{$data->kota}}</option>
                              @endforeach
                              </select>
                          </div>
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                                <input type="text" name ="kecamatan" value="{{ $kecamatan->kecamatan }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           </div>
                      <button type="submit" class="btn btn-outline-success float-right">Edit  Data</button>
              </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

