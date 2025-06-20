<?php

namespace App\Filament\Resources\TourismPackageResource\Pages;

use App\Filament\Resources\TourismPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTourismPackage extends EditRecord
{
    protected static string $resource = TourismPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
