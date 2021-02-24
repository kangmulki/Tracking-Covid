@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kota</div>
                <div class="card-body">

                <a href="{{ route('kota.create') }}" class="btn btn-outline-success float-right"><b>Add Data</b></a>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Provinsi</th>
                      <th scope="col">Kode Kota</th>
                      <th scope="col">Kota</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php    $no = 1;    @endphp
                  @foreach ($kota as $data)
                    <tr>
                      <th scope="row">{{ $no++}}</th>
                      <td>{{$data->provinsii->provinsi}}</td>
                      <td>{{$data->kode_kota}}</td>
                      <td>{{$data->kota}}</td>
                      <form action="{{route('kota.destroy', $data->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                      <td>
                      <a href="{{route('kota.edit', $data->id)}}"class="btn btn-outline-primary float-right"><b>Edit</b></a>
                      <a href="{{route('kota.show', $data->id)}}" class="btn btn-outline-info float-right"><b>Detail</b></a>
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

