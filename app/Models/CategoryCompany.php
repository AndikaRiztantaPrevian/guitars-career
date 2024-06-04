<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryCompany extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Relasi untuk mengambil career yang berelasi dengan category terkait
     *
     * @return HasMany
     */
    public function career(): HasMany
    {
        return $this->hasMany(Career::class);
    }
}
