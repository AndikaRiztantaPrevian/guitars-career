<div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="font-sm mb-10">Provinsi</label>
                <select class="form-select" wire:model.live="selectedProvince">
                    <option value="">Pilih Provinsi</option>
                    @foreach ($provinces as $item)
                        <option value="{{ $item->code }}">
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="font-sm mb-10">Kabupaten/Kota</label>
                <select class="form-select" wire:model.live="selectedCity" {{ empty($cities) ? 'disabled' : '' }}>
                    <option value="">Pilih Kabupaten/Kota</option>
                    @foreach ($cities as $item)
                        <option value="{{ $item->code }}">
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="font-sm mb-10">Kecamatan</label>
                <select class="form-select" wire:model.live="selectedDistrict"
                    {{ empty($districts) ? 'disabled' : '' }}>
                    <option value="">Pilih Kecamatan</option>
                    @foreach ($districts as $item)
                        <option value="{{ $item->code }}">
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="font-sm mb-10">Kelurahan/Desa</label>
                <select class="form-select" wire:model.live="selectedVillage" {{ empty($villages) ? 'disabled' : '' }}>
                    <option value="">Pilih Kelurahan/Desa</option>
                    @foreach ($villages as $item)
                        <option value="{{ $item->code }}">
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
