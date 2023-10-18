<?php

namespace App\Filament\Resources\PropertyPlanResource\Pages;

use App\Filament\Resources\PropertyPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPropertyPlan extends EditRecord
{
    protected static string $resource = PropertyPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
