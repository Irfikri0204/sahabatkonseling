<?php

namespace App\Filament\Resources\FeedbackKonselorResource\Pages;

use App\Filament\Resources\FeedbackKonselorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeedbackKonselors extends ListRecords
{
    protected static string $resource = FeedbackKonselorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
