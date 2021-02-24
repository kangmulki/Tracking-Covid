@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Add Data Kasus</b></div>
                <div class="card-body">
                  <!-- Form Create Data Provinsi -->
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                    @livewireStyles
                        
                              @livewire('dropdowns',[
                              'selectedState4'=>$kasus->id_rw,
                              'selectedState3'=>$kasus->rww->id_kelurahan,
                              'selectedState2'=>$kasus->rww->kelurahann->id_kecamatan,
                              'selectedState'=>$kasus->rww->kelurahann->kecamatann->id_kota,
                              ])

                        
                    @livewireScripts 
                    <div class="mb-3">
                      <label for="city" class="col-md-7 col-form-label text-md-right"><h3><u> Status Kasus </u></h3></label>
                    </div>  
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Positif</label>
                                <input type="text" name ="jumlah_positif" value="{{ $kasus->jumlah_positif }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Sembuh</label>
                                <input type="text" name ="jumlah_sembuh" value="{{ $kasus->jumlah_sembuh }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Meninggal</label>
                                <input type="text" name ="jumlah_meninggal" value="{{ $kasus->jumlah_meninggal }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                      <button type="submit" class="btn btn-outline-success float-right">Add Data</button>
              </form>
              </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

