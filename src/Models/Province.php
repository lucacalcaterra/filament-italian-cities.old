<?php

namespace LucaCalcaterra\FilamentItalianCities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends Model
{
    use HasFactory;

    protected $table = 'italy_provinces';

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

}
