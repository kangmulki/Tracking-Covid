@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header success">Data Kasus</div>
                <div class="card-body">
                
                <a href="{{ route('kasus.create') }}" class="btn btn-outline-success float-right"><b>Add Data</b></a>
                  <table class="table">
                          <thead>
                              <tr>
                              <th scope="col">No</th>
                              <th scope="col">Lokasi</th>
                              <th scope="col">Rw</th>
                              <th scope="col">Jumlah Positif</th>
                              <th scope="col">Jumlah Sembuh</th>
                              <th scope="col">Jumlah Meninggal</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          @php $no = 1; @endphp
                          @foreach($kasus as $data)
                              <tr>
                              <th scope="row">{{ $no++ }}</th>
                              <td>
                             <b> Provinsi </b>  : {{ $data->rww->kelurahann->kecamatann->kotaa->provinsii->provinsi }}<br>
                             <b> Kota </b>      : {{ $data->rww->kelurahann->kecamatann->kotaa->kota }}<br>
                             <b> Kecamatan </b> : {{ $data->rww->kelurahann->kecamatann->kecamatan }}<br>
                             <b> Kelurahan </b> : {{ $data->rww->kelurahann->kelurahan }}<br>
                              </td>
                              <td>
                              {{ $data->rww->rw }}<br>
                              </td>
                              <td>{{ $data->jumlah_positif }}</td>
                              <td>{{ $data->jumlah_sembuh }}</td>
                              <td>{{ $data->jumlah_meninggal }}</td>
                              <td>{{ date("d F Y", strtotime($data->tanggal)) }}</td>
                          <form action="" method="post">
                              @csrf
                              @method('DELETE')
                              <td>
                              <a href="{{ route('kasus.edit', $data->id) }}"class="btn btn-outline-primary floats"><b>Edit</b></a>
                              <a href="" class="btn btn-outline-info floats"><b>Detail</b></a>
                              <button type="submit" class="btn btn-outline-danger floats">Delete</button>
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
