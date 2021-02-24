@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Edit Data Kelurahan</b></div>
                <div class="card-body">
                  <!-- Form Create Data Provinsi -->
                <form action="{{route('kelurahan.update', $kelurahan->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                          <div class="mb-3">
                              <label for="disabledSelect" class="form-label">Kecamatan</label>
                              <select id="disabledSelect" class="form-control" name="id_kecamatan">
                              @foreach($kecamatan as $data)
                                <option value="{{$data->id}}" {{ $data->id == $kelurahan->id_kecamatan ? 'selected' : '' }} >{{$data->kecamatan}}</option>
                              @endforeach
                              </select>
                          </div>
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kelurahan</label>
                                <input type="text" name ="kelurahan" value="{{ $kelurahan->kelurahan }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           </div>
                      <button type="submit" class="btn btn-outline-success float-right">Add  Data</button>
              </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

