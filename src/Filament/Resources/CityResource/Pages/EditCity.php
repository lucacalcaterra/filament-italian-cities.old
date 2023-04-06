<?php

namespace LucaCalcaterra\FilamentItalianCities\Filament\Resources\CityResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use LucaCalcaterra\FilamentItalianCities\Filament\Resources\CityResource;

class EditCity extends EditRecord
{
    protected static string $resource = CityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
