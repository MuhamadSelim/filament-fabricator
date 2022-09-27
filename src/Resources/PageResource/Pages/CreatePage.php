<?php

namespace Z3d0X\FilamentFabricator\Resources\PageResource\Pages;

use Filament\Pages\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;
use Z3d0X\FilamentFabricator\Resources\PageResource;

class CreatePage extends CreateRecord
{

    protected static string $resource = PageResource::class;
    
}
