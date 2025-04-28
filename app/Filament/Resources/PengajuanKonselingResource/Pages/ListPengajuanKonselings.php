<?php

namespace App\Filament\Resources\PengajuanKonselingResource\Pages;

use App\Filament\Resources\PengajuanKonselingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengajuanKonselings extends ListRecords
{
    protected static string $resource = PengajuanKonselingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
