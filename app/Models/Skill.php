<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Relasi untuk mengambil data career yang berkualifikasi skill terkait
     *
     * @return BelongsToMany
     */
    public function Career(): BelongsToMany
    {
        return $this->belongsToMany(Career::class, 'career_skill');
    }
}
