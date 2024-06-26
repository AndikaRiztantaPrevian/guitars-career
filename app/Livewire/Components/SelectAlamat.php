<?php

namespace App\Livewire\Components;

use KodePandai\Indonesia\Models\City;
use KodePandai\Indonesia\Models\District;
use KodePandai\Indonesia\Models\Province;
use KodePandai\Indonesia\Models\Village;
use Livewire\Component;

class SelectAlamat extends Component
{
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
    }

    public function render()
    {
        return view('livewire.components.select-alamat', [
            'provinces' => $this->provinces,
            'cities' => $this->cities,
            'districts' => $this->districts,
            'villages' => $this->villages,
        ]);
    }
}
