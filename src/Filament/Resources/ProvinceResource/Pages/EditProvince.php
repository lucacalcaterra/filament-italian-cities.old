<?php

namespace LucaCalcaterra\FilamentItalianCities\Filament\Resources\ProvinceResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use LucaCalcaterra\FilamentItalianCities\Filament\Resources\ProvinceResource;

class EditProvince extends EditRecord
{
    protected static string $resource = ProvinceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
