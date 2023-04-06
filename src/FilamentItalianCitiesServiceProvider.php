<?php

namespace LucaCalcaterra\FilamentItalianCities;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentItalianCitiesServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-italian-cities';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-italian-cities' => __DIR__ . '/../resources/dist/filament-italian-cities.css',
    ];

    protected array $scripts = [
        'plugin-filament-italian-cities' => __DIR__ . '/../resources/dist/filament-italian-cities.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-italian-cities' => __DIR__ . '/../resources/dist/filament-italian-cities.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasMigration('create_filament-italian-cities_table')
            ->runsMigrations();
    }
}
