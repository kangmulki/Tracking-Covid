@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kelurahan</div>
                <div class="card-body">
                
                <a href="{{ route('kelurahan.create') }}" class="btn btn-outline-success float-right"><b>Add Data</b></a>
                  <table class="table">
                          <thead>
                              <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kecamatan</th>
                              <th scope="col">Kelurahan</th>
                              <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          @php $no = 1; @endphp
                          @foreach($kelurahan as $data)
                              <tr>
                              <th scope="row">{{ $no++ }}</th>
                              <td>{{ $data->kecamatann->kecamatan }}</td>
                              <td>{{ $data->kelurahan }}</td>
                          <form action="{{route('kelurahan.destroy', $data->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <td>
                              <a href="{{route('kelurahan.edit', $data->id)}}"class="btn btn-outline-primary float-right"><b>Edit</b></a>
                              <a href="{{route('kelurahan.show', $data->id)}}" class="btn btn-outline-info float-right"><b>Detail</b></a>
                              <button type="submit" class="btn btn-outline-danger float-right">Delete</button>
                              </td>
                              </tr>
                          </form>
                          @endforeach
                          </tbody>
                      </table>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection

