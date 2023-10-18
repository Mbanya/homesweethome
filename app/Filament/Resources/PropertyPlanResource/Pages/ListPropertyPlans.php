<?php

namespace App\Filament\Resources\PropertyPlanResource\Pages;

use App\Filament\Resources\PropertyPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPropertyPlans extends ListRecords
{
    protected static string $resource = PropertyPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
