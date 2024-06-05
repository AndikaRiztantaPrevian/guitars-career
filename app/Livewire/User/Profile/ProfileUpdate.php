<?php

namespace App\Livewire\User\Profile;

use App\Livewire\Forms\Profile\UpdateProfileForm;
use KodePandai\Indonesia\Models\City;
use KodePandai\Indonesia\Models\District;
use KodePandai\Indonesia\Models\Province;
use KodePandai\Indonesia\Models\Village;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProfileUpdate extends Component
{
    use WithFileUploads;

    public UpdateProfileForm $form;

    public $provinces;
    public $cities = [];
    public $districts = [];
    public $villages = [];

    public $selectedProvince = null;
    public $selectedCity = null;
    public $selectedDistrict = null;
    public $selectedVillage = null;

    public function mount()
    {
        $this->provinces = Province::all();

        $this->form->name = auth()->user()->name;
        $this->form->email = auth()->user()->email;
        $this->form->phoneNumber = auth()->user()->phone_number;
        $this->form->address = auth()->user()->address;
        $this->form->bio = auth()->user()->bio;
        $this->form->provinceId = auth()->user()->province_code;
        $this->form->cityId = auth()->user()->city_code;
        $this->form->districtId = auth()->user()->district_code;
        $this->form->villageId = auth()->user()->village_code;
    }

    public function updatedSelectedProvince($provinceId)
    {
        $this->cities = City::query()->whereHas(
            'province',
            function ($query) use ($provinceId) {
                $query->whereCode($provinceId);
            }
        )->get();

        $this->selectedCity = null;
        $this->districts = [];
        $this->selectedDistrict = null;
        $this->villages = [];
        $this->selectedVillage = null;
        $this->form->provinceId = $provinceId;
    }

    public function updatedSelectedCity($cityId)
    {
        $this->districts = District::query()->whereHas(
            'city',
            function ($query) use ($cityId) {
                $query->whereCode($cityId);
            }
        )->get();

        $this->selectedDistrict = null;
        $this->villages = [];
        $this->selectedVillage = null;
        $this->form->cityId = $cityId;
    }

    public function updatedSelectedDistrict($districtId)
    {
        $this->villages = Village::query()
            ->whereHas(
                'district',
                function ($query) use ($districtId) {
                    $query->whereCode($districtId);
                }
            )->get();

        $this->selectedVillage = null;
        $this->form->districtId = $districtId;
    }

    protected function getProvinceName($provinceId)
    {
        $province = Province::find($provinceId);
        return $province ? $province->name : 'Pilih Provinsi';
    }

    protected function getCityName($cityId)
    {
        $city = City::find($cityId);
        return $city ? $city->name : 'Pilih Kabupaten/Kota';
    }

    protected function getDistrictName($districtId)
    {
        $disctrict = District::find($districtId);
        return $disctrict ? $disctrict->name : 'Pilih Kecamatan';
    }

    protected function getVillageName($villageId)
    {
        $village = Village::find($villageId);
        return $village ? $village->name : 'Pilih Kelurahan';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->form->submitForm();
        $this->dispatch('user-updated', message: 'User berhasil diupdate!');
    }

    public function render()
    {
        return view('livewire.user.profile.profile-update', [
            'provinces' => $this->provinces,
            'cities' => $this->cities,
            'districts' => $this->districts,
            'villages' => $this->villages,
        ]);
    }
}
