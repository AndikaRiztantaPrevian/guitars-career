<?php

namespace App\Livewire\User\JobVacancy;

use App\Livewire\Forms\CareerCreateForm;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use KodePandai\Indonesia\Models\City;
use KodePandai\Indonesia\Models\District;
use KodePandai\Indonesia\Models\Province;
use KodePandai\Indonesia\Models\Village;

class BuatLowonganForm extends Component
{

    use WithFileUploads;

    public CareerCreateForm $form;

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

    public function createLowongan()
    {
        $this->form->create();
        $this->dispatch('career-created', message: 'lowongan berhasil di buat!');
    }

    public function render()
    {
        return view('livewire.user.job-vacancy.buat-lowongan-form', [
            'provinces' => $this->provinces,
            'cities' => $this->cities,
            'districts' => $this->districts,
            'villages' => $this->villages,
        ]);
    }
}
