<?php

namespace App\Filament\Resources\EventResource\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\EventResource;

class ListEvents extends ListRecords
{
    protected static string $resource = EventResource::class;
}
