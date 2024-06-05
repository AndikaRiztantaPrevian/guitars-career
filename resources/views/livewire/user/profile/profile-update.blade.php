<div>
  <form wire:submit="save" class="row">
    <div class="col-lg-6 col-md-12 mt-3">
      <div class="form-group d-flex flex-column w-100 align-items-start">
        <div class="w-50">
          <img class="rounded-circle" style="object-fit: cover" height="90" width="90"
            src="{{ asset('storage/' . auth()->user()->image) }}" alt="{{ auth()->user()->name }}">
        </div>
        <div style="width: 70%">
          <input name="form.image"
            class="form-control mt-2 @error('form.image') is-invalid @elseif($this->form->image == null) @else is-valid @enderror"
            type="file" value="{{ auth()->user()->image }}" wire:model.live.debounce.500ms="form.image"></input>
          @error('form.image')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
      <div class="form-group">
        <label class="font-sm mb-10">Nama Lengkap</label>
        <input name="form.name"
          class="form-control @error('form.name') is-invalid @elseif($this->form->name == null) @else is-valid @enderror"
          type="text" value="{{ auth()->user()->name }}" wire:model.live.debounce.500ms="form.name">
        @error('form.name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
        <label class="font-sm mb-10">Email *</label>
        <input
          class="form-control @error('form.email') is-invalid @elseif($this->form->email == null) @else is-valid @enderror"
          type="text" value="{{ auth()->user()->email }}" wire:model.live.debounce.500ms="form.email">
        @error('form.email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
        <label class="font-sm mb-10">Nomer Handphone</label>
        <input
          class="form-control @error('form.phoneNumber') is-invalid @elseif($this->form->phoneNumber == null) @else is-valid @enderror"
          type="number" value="{{ auth()->user()->phone_number }}" wire:model.live.debounce.500ms="form.phoneNumber" placeholder="0876-XXXX-XXXX">
        @error('form.phoneNumber')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="col-lg-6 col-md-12 mt-3">
      <div class="form-group">
        <label class="font-sm mb-10">Alamat</label>
        <textarea
          class="form-control @error('form.address') is-invalid @elseif($this->form->address == null) @else is-valid @enderror"
          rows="2" value="{{ auth()->user()->address }}"
          placeholder="Contoh : Jl. Desa, RT.2/RW.2, Jrebeng Wetan, Kec. Kedopok, Kota Probolinggo, Jawa Timur 67231"
          wire:model.live.debounce.500ms="form.address"></textarea>
        @error('form.address')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
        <label class="font-sm mb-10">Bio</label>
        <textarea
          class="form-control @error('form.bio') is-invalid @elseif($this->form->bio == null) @else is-valid @enderror"
          rows="4" value="{{ auth()->user()->bio }}" wire:model.live.debounce.500ms="form.bio"
          placeholder="Contoh : Saya sudah berpengalaman memainkan alat musik selama 4 tahu."></textarea>
        @error('form.bio')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label class="font-sm mb-10">Provinsi</label>
            <select
              class="form-select @error('form.provinceId') is-invalid @elseif($this->form->provinceId == null) @else is-valid @enderror"
              wire:model.live.debounce.500ms="selectedProvince">
              <option value="{{ $this->form->provinceId ? $this->form->provinceId : '' }}">
                {{ $this->getProvinceName($this->form->provinceId) }}
              </option selected>
              @foreach ($provinces as $item)
                <option value="{{ $item->code }}">
                  {{ $item->name }}
                </option>
              @endforeach
            </select>
            @error('form.provinceId')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label class="font-sm mb-10">Kabupaten/Kota</label>
            <select
              class="form-select @error('form.cityId') is-invalid @elseif($this->form->cityId == null) @else is-valid @enderror"
              wire:model.live.debounce.500ms="selectedCity"
              {{ empty($cities) && !auth()->user()->city ? 'disabled' : '' }}>
              <option value="{{ $this->form->cityId ? $this->form->cityId : '' }}">
                {{ $this->getCityName($this->form->cityId) }}
              </option selected>
              @foreach ($cities as $item)
                <option value="{{ $item->code }}">
                  {{ $item->name }}
                </option>
              @endforeach
            </select>
            @error('form.cityId')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label class="font-sm mb-10">Kecamatan</label>
            <select
              class="form-select @error('form.districtId') is-invalid @elseif($this->form->districtId == null) @else is-valid @enderror"
              wire:model.live.debounce.500ms="selectedDistrict"
              {{ empty($districts) && !auth()->user()->city ? 'disabled' : '' }}>
              <option value="{{ $this->form->districtId ? $this->form->districtId : '' }}">
                {{ $this->getDistrictName($this->form->districtId) }}
              </option selected>
              @foreach ($districts as $item)
                <option value="{{ $item->code }}">
                  {{ $item->name }}
                </option>
              @endforeach
            </select>
            @error('form.districtId')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label class="font-sm mb-10">Kelurahan/Desa</label>
            <select
              class="form-select @error('form.villageId') is-invalid @elseif($this->form->villageId == null) @else is-valid @enderror"
              wire:model.live.debounce.500ms="form.villageId"
              {{ empty($villages) && !auth()->user()->city ? 'disabled' : '' }}>
              <option value="{{ $this->form->villageId ? $this->form->villageId : '' }}">
                {{ $this->getVillageName($this->form->villageId) }}
              </option selected>
              @foreach ($villages as $item)
                <option value="{{ $item->code }}">
                  {{ $item->name }}
                </option>
              @endforeach
            </select>
            @error('form.villageId')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
      </div>
    </div>
    <div class="border-bottom pt-10 pb-10 mb-30"></div>
    <h6 class="color-orange mb-20">Ubah kata sandi</h6>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="font-sm mb-10">Kata sandi baru</label>
          <input
            class="form-control @error('form.password') is-invalid @elseif($this->form->password == null) @else is-valid @enderror"
            type="password" placeholder="*******" wire:model.live.debounce.500ms="form.password">
          @error('form.password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="font-sm mb-10">Ulangi kata sandi *</label>
          <input
            class="form-control @error('form.passwordConfirmation') is-invalid @elseif($this->form->passwordConfirmation == null) @else is-valid @enderror"
            type="password" placeholder="*******" wire:model.live.debounce.500ms="form.passwordConfirmation">
          @error('form.passwordConfirmation')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
    </div>
    <div class="box-button mt-15">
      <button class="btn btn-apply-big font-normal">Simpan perubahan</button>
    </div>
  </form>
  @script
    <script>
      $wire.on('user-updated', data => {
        console.log(data);
        Swal.fire({
          title: "Berhasil!",
          text: data.message,
          icon: "success"
        });
      });
    </script>
  @endscript
</div>
