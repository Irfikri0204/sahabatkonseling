<?php

namespace App\Filament\Resources\KonselorResource\Pages;

use App\Filament\Resources\KonselorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKonselor extends CreateRecord
{
    protected static string $resource = KonselorResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['pic'])) {
            $data['pic'] = 'uploads/picprofile/placeholder_pic.png';
        }

        return $data;
    }
}
