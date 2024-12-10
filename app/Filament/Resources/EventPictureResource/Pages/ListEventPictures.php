<?php

namespace App\Filament\Resources\EventPictureResource\Pages;

use App\Filament\Resources\EventPictureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventPictures extends ListRecords
{
    protected static string $resource = EventPictureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
