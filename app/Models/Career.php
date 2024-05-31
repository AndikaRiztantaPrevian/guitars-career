<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Career extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Relasi untuk mengambil kualifikasi skill
     *
     * @return BelongsToMany
     */
    public function Skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'career_skill');
    }
}
