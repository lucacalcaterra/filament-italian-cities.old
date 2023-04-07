<?php

namespace LucaCalcaterra\FilamentItalianCities\Filament\Resources\ProvinceResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use LucaCalcaterra\FilamentItalianCities\Filament\Resources\ProvinceResource;

class ListProvinces extends ListRecords
{
    protected static string $resource = ProvinceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
