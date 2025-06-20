<?php
namespace App\Filament\Resources\GalleryItemResource\Pages;

use App\Filament\Resources\GalleryItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditGalleryItem extends EditRecord
{
    protected static string $resource = GalleryItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->before(function () {
                    // Delete associated image file before deleting record
                    if ($this->record->image && Storage::disk('public')->exists($this->record->image)) {
                        Storage::disk('public')->delete($this->record->image);
                    }
                }),
        ];
    }

    protected function beforeSave(): void
    {
        // If image was changed, delete the old one
        if ($this->record->isDirty('image') && $this->record->getOriginal('image')) {
            $oldImage = $this->record->getOriginal('image');
            if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }
        }
    }
}
