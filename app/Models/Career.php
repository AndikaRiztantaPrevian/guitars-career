<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use KodePandai\Indonesia\Models\City;
use KodePandai\Indonesia\Models\District;
use KodePandai\Indonesia\Models\Province;
use KodePandai\Indonesia\Models\Village;

class Career extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Accessor untuk salary
    public function getSalaryAttribute($value)
    {
        // Gunakan NumberFormatter untuk format angka dalam bentuk Rupiah
        $formatter = new \NumberFormatter('id_ID', \NumberFormatter::CURRENCY);
        return $formatter->formatCurrency($value, 'IDR');
    }

    /**
     * Relasi untuk mengambil kualifikasi skill
     *
     * @return BelongsToMany
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'career_skill')->withTimestamps();
    }

    /**
     * Relasi untuk mengambil CategoryCompany yang berelasi dengan career terkait
     *
     * @return BelongsTo
     */
    public function category_company(): BelongsTo
    {
        return $this->belongsTo(CategoryCompany::class, 'category_company_id');
    }

    /**
     * Relasi untuk mengambil provinsi
     *
     * @return BelongsTo
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }

    /**
     * Relasi untuk mengambil kota
     *
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_code', 'code');
    }

    /**
     * Relasi untuk mengambil distrik
     *
     * @return BelongsTo
     */
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class, 'district_code', 'code');
    }

    /**
     * Relasi untuk mengambil desa
     *
     * @return BelongsTo
     */
    public function village(): BelongsTo
    {
        return $this->belongsTo(Village::class, 'village_code', 'code');
    }
}
