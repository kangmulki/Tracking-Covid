@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Add Data Kasus</b></div>
                <div class="card-body">
                  <!-- Form Create Data Provinsi -->
                <form action="{{ route('kasus.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                    @livewireStyles
                        
                              @livewire('dropdowns')
                        
                    @livewireScripts 
                    <div class="mb-3">
                      <label for="city" class="col-md-7 col-form-label text-md-right"><h3><u> Status Kasus </u></h3></label>
                    </div>  
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Positif</label>
                                <input type="text" name ="jumlah_positif" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Sembuh</label>
                                <input type="text" name ="jumlah_sembuh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Meninggal</label>
                                <input type="text" name ="jumlah_meninggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                <input type="date" name ="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                      <button type="submit" class="btn btn-outline-success float-right">Add Data</button>
              </form>
              </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

