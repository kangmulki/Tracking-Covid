@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Add Data Rw</b></div>
                <div class="card-body">
                  <!-- Form Create Data Rw -->
                <form action="{{route('rw.store')}}" method="POST">
                    @csrf
                          <div class="mb-3">
                              <label for="disabledSelect" class="form-label">Kelurahan</label>
                              <select id="disabledSelect" class="form-control" name="id_kelurahan">
                              @foreach($kelurahan as $data)
                                <option value="{{$data->id}}">{{$data->kelurahan}}</option>
                              @endforeach
                              </select>
                          </div>
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">RW</label>
                                <input type="text" name ="rw" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           </div>
                      <button type="submit" class="btn btn-outline-success float-right">Add  Data</button>
              </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

