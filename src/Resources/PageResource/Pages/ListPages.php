<?php

namespace Z3d0X\FilamentFabricator\Resources\PageResource\Pages;

use Filament\Pages\Actions;
use Filament\Pages\Actions\LocaleSwitcher;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;
use Z3d0X\FilamentFabricator\Resources\PageResource;

class ListPages extends ListRecords
{

    protected static string $resource = PageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
