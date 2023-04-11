<?php

namespace LucaCalcaterra\FilamentItalianCities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $table = 'italy_cities';

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
}
