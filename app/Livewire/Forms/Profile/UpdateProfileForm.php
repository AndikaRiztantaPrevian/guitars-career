<?php

namespace App\Livewire\Forms\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Form;

class UpdateProfileForm extends Form
{
    public $image;
    public $name;
    public $email;
    public $phoneNumber;
    public $address;
    public $bio;
    public $provinceId;
    public $cityId;
    public $districtId;
    public $villageId;
    public $password;
    public $passwordConfirmation;

    protected $rules = [
        'image' => 'nullable|image|mimes:jpg,jpeg,png',
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'phoneNumber' => 'required|numeric|regex:/^08[0-9]{8,13}$/',
        'bio' => 'nullable|string|max:255',
        'address' => 'required',
        'provinceId' => 'required',
        'cityId' => 'required',
        'districtId' => 'required',
        'villageId' => 'required',
        'password' => 'nullable|min:8',
        'passwordConfirmation' => 'nullable|same:password',
    ];

    protected $messages = [
        'image.image' => 'Format harus berupa gambar.',
        'image.mimes' => 'Format gambar harus jpg,jpeg,png.',
        'name.required' => 'Nama wajib diisi.',
        'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Email tidak valid.',
        'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
        'email.unique' => 'Email sudah terdaftar.',
        'phoneNumber.required' => 'Nomor HP wajib diisi.',
        'phoneNumber.numeric' => 'Nomor HP harus berupa angka.',
        'phoneNumber.regex' => 'Nomor HP harus dimulai dengan "08" dan memiliki panjang antara 10 hingga 15 karakter.',
        'bio.string' => 'Bio harus berupa teks.',
        'bio.max' => 'Bio tidak boleh lebih dari 255 karakter.',
        'address.required' => 'Alamat wajib diisi.',
        'provinceId.required' => 'Provinsi wajib diisi.',
        'cityId.required' => 'Kota wajib diisi.',
        'districtId.required' => 'Negara bagian wajib diisi.',
        'villageId.required' => 'Desa wajib diisi.',
        'password.min' => 'Kata sandi harus minimal 8 karakter.',
        'passwordConfirmation.same' => 'Konfirmasi kata sandi tidak sama dengan kata sandi sebelumnya.'
    ];

    public function submitForm()
    {   
        $user = User::find(Auth::user()->id);
        
        $dataForUpdate = $this->collectDataToUpdate($user);

        if (!empty($dataForUpdate)) {
            $user->update($dataForUpdate);
        }
        
        $this->reset(['password', 'passwordConfirmation']);
    }

    protected function collectDataToUpdate($user)
    {
        $dataToUpdate = [];

        if ($this->hasNewImage($user->image)) {
            $dataToUpdate['image'] = $this->uploadImage($user->image);
        }

        $fields = ['name', 'email', 'phoneNumber' => 'phone_number', 'bio', 'address', 'provinceId' => 'province_code', 'cityId' => 'city_code', 'districtId' => 'district_code', 'villageId' => 'village_code'];

        foreach ($fields as $field => $dbField) {
            if (is_int($field)) {
                $field = $dbField;
            }
            if ($this->{$field} !== $user->{$dbField}) {
                $dataToUpdate[$dbField] = $this->{$field};
            }
        }

        if ($this->password) {
            $dataToUpdate['password'] = Hash::make($this->password);
        }

        return $dataToUpdate;
    }

    protected function hasNewImage($currentImage)
    {
        return $this->image && $this->image !== $currentImage;
    }

    protected function uploadImage($currentImage)
    {
        if ($currentImage) {
            Storage::disk('public')->delete($currentImage);
        }
        return $this->image->store('photo-profile', 'public');
    }
}
