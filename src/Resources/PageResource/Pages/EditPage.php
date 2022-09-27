<?php

namespace Z3d0X\FilamentFabricator\Resources\PageResource\Pages;

use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Pages\Actions\LocaleSwitcher;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;
use Illuminate\Contracts\View\View;
use Z3d0X\FilamentFabricator\Resources\PageResource;

class EditPage extends EditRecord
{

    protected static string $resource = PageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Action::make('visit')
                ->url(config('filament-fabricator.routing.prefix') . '/' . $this->record->slug)
                ->icon('heroicon-o-external-link')
                ->openUrlInNewTab()
                ->color('success')
                ->visible(config('filament-fabricator.routing.enabled')),
        ];
    }
}
