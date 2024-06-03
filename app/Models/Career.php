<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use KodePandai\Indonesia\Models\City;
use KodePandai\Indonesia\Models\District;
use KodePandai\Indonesia\Models\Province;
use KodePandai\Indonesia\Models\Village;

class Career extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

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
     * Relasi untuk mengambil provinsi
     *
     * @return void
     */
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }

    /**
     * Relasi untuk mengambil kota
     *
     * @return void
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_code', 'code');
    }

    /**
     * Relasi untuk mengambil distrik
     *
     * @return void
     */
    public function district()
    {
        return $this->belongsTo(District::class, 'district_code', 'code');
    }

    /**
     * Relasi untuk mengambil desa
     *
     * @return void
     */
    public function village()
    {
        return $this->belongsTo(Village::class, 'village_code', 'code');
    }
}
