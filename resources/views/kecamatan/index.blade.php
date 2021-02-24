@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kecamatan</div>
                <div class="card-body">
                
                <a href="{{ route('kecamatan.create') }}" class="btn btn-outline-success float-right"><b>Add Data</b></a>

                <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php    $no = 1;    @endphp
                        @foreach ($kecamatan as $data)
                            <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->kotaa->kota }}</td>
                            <td>{{ $data->kecamatan }}</td>
                            <td></td>
                        <form action="{{route('kecamatan.destroy', $data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <td>
                            <a href="{{ route('kecamatan.edit', $data->id) }}"class="btn btn-outline-primary float-right"><b>Edit</b></a>
                            <a href="{{ route('kecamatan.show', $data->id) }}" class="btn btn-outline-info float-right"><b>Detail</b></a>
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



