<div>
    <div class="form-group row">
        <label for="state" class="col-md-4 col-form-label text-md-left">Provinsi</label>

        <div class="col-md-12">
            <select wire:model="selectedState" class="form-control">
                <option value="" selected>--- Pilih Provinsi ---</option>
                @foreach($provinsi as $data)
                    <option value="{{ $data->id }}">{{ $data->provinsi }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedState))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-left">Kota</label>

            <div class="col-md-12">
                <select wire:model="selectedState2" class="form-control" name="city_id">
                    <option value="" selected>--- Pilih Kota ---</option>
                    @foreach($kota as $data2)
                        <option value="{{ $data2->id }}">{{ $data2->kota }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @endif
        @if (!is_null($selectedState2))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-left">Kecamatan</label>

            <div class="col-md-12">
                <select wire:model="selectedState3" class="form-control" name="city_id">
                    <option value="" selected>--- Pilih Kecamatan ---</option>
                    @foreach($kecamatan as $data3)
                        <option value="{{ $data3->id }}">{{ $data3->kecamatan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @endif
        @if (!is_null($selectedState3))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-left">Kelurahan</label>

            <div class="col-md-12">
                <select wire:model="selectedState4" class="form-control" name="">
                    <option value="" selected>--- Pilih Kelurahan ---</option>
                    @foreach($kelurahan as $data4)
                        <option value="{{ $data4->id }}">{{ $data4->kelurahan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @endif
        @if (!is_null($selectedState4))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-left">RW</label>

            <div class="col-md-12">
                <select  class="form-control" name="id_rw">
                    <option value="" selected>--- Pilih RW ---</option>
                    @foreach($rw as $data5)
                        <option value="{{ $data5->id }}">{{ $data5->rw }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @endif
        
</div>