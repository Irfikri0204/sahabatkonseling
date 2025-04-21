<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KonselorResource\Pages;
use App\Filament\Resources\KonselorResource\RelationManagers;
use App\Models\Konselor;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KonselorResource extends Resource
{
    protected static ?string $model = Konselor::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Data Akun';

    protected static ?string $navigationLabel = 'Konselor';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_user')
                ->label('Nama Akun')
                ->relationship('user', 'name')
                ->searchable()
                ->preload()
                ->required()
                ->afterStateUpdated(function ($state, Set $set) {
                    $user = User::find($state);
                    if ($user) {
                        $set('nama', $user->name);
                        $set('email', $user->email);
                    }
                }),
                TextInput::make('nim_or_nip')
                    ->label('NIM/NIP')
                    ->required(),
                TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->required()
                    ->dehydrated()
                    ->reactive(),
                FileUpload::make('pic')
                    ->label('Foto')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/picprofile'),
                Radio::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->inline()
                    ->inlineLabel(false)
                    ->required(),
                TextInput::make('usia')
                    ->label('Usia')
                    ->numeric()
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->disabled()
                    ->dehydrated()
                    ->reactive(),
                TextInput::make('no_telp')
                    ->numeric()
                    ->required(),
                Radio::make('role')
                    ->label('Role')
                    ->options([
                        'Konselor' => 'Konselor',
                        'Konselor Sebaya' => 'Konselor Sebaya',
                    ])
                    ->inline()
                    ->inlineLabel(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_user')
                ->label('Id Akun'),
                TextColumn::make('nim_or_nip')
                ->label('NIM/NIP'),
                TextColumn::make('nama')
                ->label('Nama Lengkap'),
                ImageColumn::make('pic')
                ->label('Foto')
                ->disk('public')
                ->size(100)
                ->square(),
                TextColumn::make('usia')
                ->label('Usia'),
                TextColumn::make('jenis_kelamin')
                ->label('Jenis Kelamin'),
                TextColumn::make('email')
                ->label('Email'),
                TextColumn::make('no_telp')
                ->label('No Telp'),
                SelectColumn::make('role')
                ->label('Role')
                ->options([
                    'Konselor' => 'Konselor',
                    'Konselor Sebaya' => 'Konselor Sebaya',
                ])
                ->rules(['required'])
                ->selectablePlaceholder(false),
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
            'index' => Pages\ListKonselors::route('/'),
            'create' => Pages\CreateKonselor::route('/create'),
            'edit' => Pages\EditKonselor::route('/{record}/edit'),
        ];
    }
}
