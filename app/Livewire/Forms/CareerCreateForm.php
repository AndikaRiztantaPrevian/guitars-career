<?php

namespace App\Livewire\Forms;

use App\Models\Career;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CareerCreateForm extends Form
{
    #[Validate('required')]
    public $companyName;

    #[Validate('required|image')]
    public $image;

    #[Validate('required')]
    public $address;

    #[Validate('required')]
    public $provinceId;

    #[Validate('required')]
    public $cityId;

    #[Validate('required')]
    public $districtId;

    #[Validate('required')]
    public $villageId;

    #[Validate('required')]
    public $job_name;

    #[Validate('required')]
    public $description;

    #[Validate('required|in:fulltime,parttime')]
    public $employment_type;

    #[Validate('required')]
    public $skill;

    #[Validate('required|min:0|numeric')]
    public $salary;

    #[Validate('required')]
    public $category_company_id;

    protected $messages = [
        'companyName.required' => 'Nama perusahaan harus diisi.',
        'image.required' => 'Gambar perusahaan harus diunggah.',
        'image.image' => 'File yang diunggah harus berupa gambar.',
        'address.required' => 'Alamat perusahaan harus diisi.',
        'provinceId.required' => 'Provinsi harus dipilih.',
        'cityId.required' => 'Kota harus dipilih.',
        'districtId.required' => 'Kecamatan harus dipilih.',
        'villageId.required' => 'Desa harus dipilih.',
        'job_name.required' => 'Nama pekerjaan harus diisi.',
        'description.required' => 'Deskripsi pekerjaan harus diisi.',
        'employment_type.required' => 'Jenis pekerjaan harus dipilih.',
        'employment_type.in' => 'Jenis pekerjaan harus berupa fulltime atau parttime.',
        'skill.required' => 'Skill harus diisi.',
        'salary.required' => 'Gaji harus diisi.',
        'salary.min' => 'Gaji harus bernilai minimal 0.',
        'salary.numeric' => 'Gaji harus berupa angka.',
        'category_company_id.required' => 'Kategori Perusahaan harus dipilih.',
    ];

    public function create()
    {
        $this->validate();

        $image_title = $this->image->store('career-image', 'public');

        $career = Career::create([
            'job_name' => $this->job_name,
            'company_name' => $this->companyName,
            'image' => $image_title,
            'address' => $this->address,
            'salary' => $this->salary,
            'description' => $this->description,
            'employment_type' => $this->employment_type,
            'province_code' => $this->provinceId,
            'city_code' => $this->cityId,
            'district_code' => $this->districtId,
            'village_code' => $this->villageId,
            'user_id' => $this->category_company_id,
            'user_id' => auth()->id()
        ]);

        $career->Skills()->attach($this->skill);

        $this->reset();
    }
}
