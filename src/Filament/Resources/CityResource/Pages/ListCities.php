<?php

namespace LucaCalcaterra\FilamentItalianCities;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use LucaCalcaterra\FilamentItalianCities\CityResource;

class ListCities extends ListRecords
{
    protected static string $resource = CityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
