<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackKonselorResource\Pages;
use App\Filament\Resources\FeedbackKonselorResource\RelationManagers;
use App\Models\FeedbackKonselor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbackKonselorResource extends Resource
{
    protected static ?string $model = FeedbackKonselor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Feedback Konselor';

    protected static ?string $navigationGroup = 'Konseling';

    protected static ?int $navigationSort = 3;

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
                //
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListFeedbackKonselors::route('/'),
            'create' => Pages\CreateFeedbackKonselor::route('/create'),
            'edit' => Pages\EditFeedbackKonselor::route('/{record}/edit'),
        ];
    }
}
