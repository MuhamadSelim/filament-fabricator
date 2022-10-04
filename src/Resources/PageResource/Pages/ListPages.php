<?php

namespace Z3d0X\FilamentFabricator\Resources\PageResource\Pages;

use Filament\Pages\Actions;
use Filament\Pages\Actions\LocaleSwitcher;
use Filament\Resources\Pages\ListRecords;
use Z3d0X\FilamentFabricator\Resources\PageResource;

class ListPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            LocaleSwitcher::make()
        ];
    }
}
