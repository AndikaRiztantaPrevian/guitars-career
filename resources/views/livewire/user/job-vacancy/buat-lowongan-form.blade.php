<div>
    <div class="box-heading d-xl-flex d-md-flex justify-content-between">
        <div class="box-title">
            <h3 class="mb-35">Buat Lowongan</h3>
        </div>
        <div class="box-breadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li> <a class="icon-home" href="{{ route('career.index') }}" wire:navigate>Lowongan Saya</a></li>
                    <li><span>Buat Lowongan</span></li>
                </ul>
            </div>
        </div>
    </div>
    <form wire:submit="createLowongan">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="box-skills">
                    <h5 class="mt-0 color-brand-1">Detail Perusahaan</h5>
                    <div class="form-group">
                        <label class="font-sm mb-10">Nama Perusahaan</label>
                        <input
                            class="form-control @error('form.companyName') is-invalid @elseif($this->form->companyName == null) @else is-valid  @enderror"
                            type="text" placeholder="Isi nama perusahaan anda" wire:model.live="form.companyName">
                        @error('form.companyName')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-sm mb-10">Foto Perusahaan</label>
                        <input
                            class="form-control @error('form.image') is-invalid @elseif($this->form->image == null) @else is-valid @enderror"
                            type="file" accept="image/*" placeholder="Isi foto perusahaan anda"
                            wire:model.live="form.image">
                        @error('form.image')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-sm color-text-muted mb-10">Kategori Perusahaan
                        </label>
                        <select
                            class="form-select @error('form.category_company_id') is-invalid @elseif($this->form->category_company_id == null) @else is-valid @enderror"
                            wire:model.blur="form.category_company_id">
                            <option value="">Pilih Kategori Perusahaan</option>
                            @foreach (\App\Helpers\CategoryCompaniesHelper::list() as $item)
                                <option value="{{ $item->id }}" wire:key="{{ $item->id }}">{{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('form.category_company_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-sm mb-10">Alamat</label>
                        <textarea
                            class="form-control @error('form.address') is-invalid @elseif($this->form->address == null) @else is-valid @enderror"
                            placeholder="ex: Jl. Mt. Haryono No.10, Jati, Kec. Mayangan, Kota Probolinggo, Jawa Timur 67217"
                            wire:model.live="form.address"></textarea>
                        @error('form.address')
                            <span class="text-danger" role="alert">
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
                                    wire:model.live="selectedProvince">
                                    <option value="">Pilih Provinsi</option>
                                    @foreach ($provinces as $item)
                                        <option value="{{ $item->code }}" wire:key="{{ $item->id }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('form.provinceId')
                                    <span class="text-danger" role="alert">
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
                                    wire:model.live="selectedCity" {{ empty($cities) ? 'disabled' : '' }}>
                                    <option value="">Pilih Kabupaten/Kota</option>
                                    @foreach ($cities as $item)
                                        <option value="{{ $item->code }}" wire:key="{{ $item->id }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('form.cityId')
                                    <span class="text-danger" role="alert">
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
                                    wire:model.live="selectedDistrict" {{ empty($districts) ? 'disabled' : '' }}>
                                    <option value="">Pilih Kecamatan</option>
                                    @foreach ($districts as $item)
                                        <option value="{{ $item->code }}" wire:key="{{ $item->id }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('form.districtId')
                                    <span class="text-danger" role="alert">
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
                                    wire:model.live="form.villageId" {{ empty($villages) ? 'disabled' : '' }}>
                                    <option value="">Pilih Kelurahan/Desa</option>
                                    @foreach ($villages as $item)
                                        <option value="{{ $item->code }}" wire:key="{{ $item->id }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('form.villageId')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="box-skills">
                    <h5 class="mt-0 color-brand-1">Kualifikasi Kerja</h5>
                    <div class="form-group">
                        <label class="font-sm mb-10">Nama Pekerjaan</label>
                        <input
                            class="form-control @error('form.job_name') is-invalid @elseif($this->form->job_name == null) @else is-valid @enderror"
                            type="text" placeholder="Isi nama pekerjaan anda" wire:model.live="form.job_name">
                        @error('form.job_name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-sm mb-10">Deskripsi Pekerjaan</label>
                        <textarea
                            class="form-control @error('form.description') is-invalid @elseif($this->form->description == null) @else is-valid @enderror"
                            placeholder="Isi Deskripsi pekerjaan" wire:model.live="form.description"></textarea>
                        @error('form.description')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-sm color-text-muted mb-10">Tipe Jam Kerja
                        </label>
                        <select
                            class="form-select @error('form.employment_type') is-invalid @elseif($this->form->employment_type == null) @else is-valid @enderror"
                            wire:model.blur="form.employment_type">
                            <option value="">Pilih tipe jam kerja</option>
                            <option value="fulltime">Fulltime
                            </option>
                            <option value="parttime">Parttime
                            </option>
                        </select>
                        @error('form.employment_type')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-sm color-text-muted mb-10">Skill
                        </label>
                        <select
                            class="form-select @error('form.skill') is-invalid @elseif($this->form->skill == null) @else is-valid @enderror"
                            wire:model.blur="form.skill">
                            <option value="">Pilih skill yang di perlukan</option>
                            @foreach (\App\Helpers\SkillsHelper::list() as $item)
                                <option value="{{ $item->id }}" wire.key="{{ $item->id }}">
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('form.skill')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-sm mb-10">Gaji</label>
                        <input
                            class="form-control @error('form.salary') is-invalid @elseif($this->form->salary == null) @else is-valid @enderror"
                            type="number" placeholder="Isi gaji pekerjaan anda" min="0"
                            wire:model.live="form.salary">
                    </div>
                    @error('form.salary')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="box-button mt-15">
            <button class="btn btn-default btn-brand icon-tick">Simpan semua
                perubahan</button>
        </div>
    </form>

    @script
        <script>
            $wire.on('career-created', data => {
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
