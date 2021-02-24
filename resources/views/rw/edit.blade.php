@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Edit Data Rw</b></div>
                <div class="card-body">
                  <!-- Form Create Data Provinsi -->
                <form action="{{route('rw.update', $rw->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                          <div class="mb-3">
                              <label for="disabledSelect" class="form-label">Kelurahan</label>
                              <select id="disabledSelect" class="form-control" name="id_kelurahan">
                              @foreach($kelurahan as $data)
                                <option value="{{$data->id}}" {{ $data->id == $rw->id_kelurahan ? 'selected' : '' }} >{{$data->kelurahan}}</option>
                              @endforeach
                              </select>
                          </div>
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">RW</label>
                                <input type="text" name ="rw" value="{{ $rw->rw }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           </div>
                      <button type="submit" class="btn btn-outline-success float-right">Edit  Data</button>
              </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

