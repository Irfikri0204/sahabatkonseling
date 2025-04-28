<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Konseling;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\KonselingResource\Pages;

class KonselingResource extends Resource
{
    protected static ?string $model = Konseling::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Konseling';

    protected static ?string $navigationGroup = 'Konseling';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pengajuan.nama')
                ->label('Nama Konseli'),

                TextColumn::make('pengajuan.jurusan')
                ->label('Jurusan'),

                TextColumn::make('pengajuan.kategori_masalah')
                ->label('Kategori Masalah'),

                TextColumn::make('pengajuan.jenis_layanan')
                ->label('Jenis Layanan'),

                TextColumn::make('pengajuan.kode_konseling')
                ->label('Kode Konseling'),
                TextColumn::make('id_konselor')
                ->label('Id Konselor'),
                TextColumn::make('jadwal_konseling')
                ->label('Jadwal Konseling'),
                TextColumn::make('tempat')
                ->label('Tempat'),
                TextColumn::make('status')
                ->label('Status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('downloadPdf')
                ->label('Download PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->url(fn (Konseling $record) => route('pengajuan-konseling.export-pdf', $record->id_pengajuan))
                ->openUrlInNewTab() // opsional, kalau mau buka di tab baru
                ->color('success'),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKonselings::route('/'),
            'create' => Pages\CreateKonseling::route('/create'),
            'edit' => Pages\EditKonseling::route('/{record}/edit'),
        ];
    }
}
