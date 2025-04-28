<?php

namespace App\Filament\Resources\PengajuanKonselingResource\Pages;

use App\Filament\Resources\PengajuanKonselingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengajuanKonseling extends EditRecord
{
    protected static string $resource = PengajuanKonselingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
