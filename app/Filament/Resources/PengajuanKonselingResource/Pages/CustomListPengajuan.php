<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Table;
use App\Models\PengajuanKonseling;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\TextColumn;

class PengajuanKonselingTabs extends Page implements HasTable
{
    use InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static string $view = 'filament.pages.pengajuan-konseling-resources.custom-list-pengajuan';
    protected static ?string $title = 'Data Pengajuan Konseling';

    public string $status = 'Diproses';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                PengajuanKonseling::query()->when($this->status === 'Ditindaklanjuti', function ($query) {
                    $query->whereIn('status', ['Diterima', 'Ditolak']);
                }, function ($query) {
                    $query->where('status', 'Diproses');
                })
            )
            ->columns([
                TextColumn::make('nama')->label('Nama Lengkap'),
                TextColumn::make('nim')->label('NIM'),
                TextColumn::make('jurusan')->label('Jurusan'),
                TextColumn::make('prodi')->label('Program Studi'),
                TextColumn::make('kategori_masalah')->label('Kategori Masalah'),
                TextColumn::make('jenis_layanan')->label('Jenis Layanan'),
                TextColumn::make('status')->label('Status'),
            ]);
    }
}
