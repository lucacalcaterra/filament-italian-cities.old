<?php

namespace LucaCalcaterra\FilamentItalianCities\Filament\Resources\CityResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use LucaCalcaterra\FilamentItalianCities\Filament\Resources\CityResource;


class ListCities extends ListRecords
{
    protected static string $resource = CityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [10, 25, 50, 100, 200];
    }

}
