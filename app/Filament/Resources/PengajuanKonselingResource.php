<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Konseling;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\PengajuanKonseling;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Radio;
use Illuminate\Support\Facades\Date;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Actions\DeleteBulkAction;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Ysfkaya\FilamentPhoneInput\PhoneInputNumberType;
use App\Filament\Resources\PengajuanKonselingResource\Pages;
use App\Filament\Resources\PengajuanKonselingResource\Pages\EditPengajuanKonseling;
use App\Filament\Resources\PengajuanKonselingResource\Pages\ListPengajuanKonselings;
use App\Filament\Resources\PengajuanKonselingResource\Pages\CreatePengajuanKonseling;
use Carbon\Carbon;

class PengajuanKonselingResource extends Resource
{
    protected static ?string $model = PengajuanKonseling::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';

    protected static ?string $navigationLabel = 'Pengajuan Konseling';

    protected static ?string $navigationGroup = 'Konseling';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                ->schema([
                    TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->autocomplete(false)
                    ->required(),
                    TextInput::make('nim')
                    ->label('NIM')
                    ->required(),
                    Radio::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan'
                    ])
                    ->inline()
                    ->inlineLabel(false)
                    ->required(),
                    TextInput::make('usia')
                    ->numeric()
                    ->required(),
                    Select::make('jurusan')
                    ->label('Jurusan')
                    ->options([
                        'JPKK' => 'JPKK',
                        'JTIK' => 'JTIK',
                        'JPTE' => 'JPTE',
                        'JPTO' => 'JPTO',
                        'JTP' => 'JTP',
                        'JPTA' => 'JPTA',
                        'JPTSP' => 'JPTSP',
                        'JPTM' => 'JPTM'
                    ])
                    ->selectablePlaceholder(false)
                    ->required(),
                    TextInput::make('prodi')
                    ->label('Program Studi')
                    ->required(),
                    TextInput::make('semester')
                    ->label('Semester')
                    ->numeric()
                    ->required(),
                    PhoneInput::make('no_telp')
                    ->label('No Telp')
                    ->defaultCountry('ID')
                    ->disallowDropdown()
                    ->required(),

                    Select::make('kategori_masalah')
                    ->label('Kategori Masalah')
                    ->options([
                        'Akademik' => 'Akademik',
                        'Sosial' => 'Sosial',
                        'Karir' => 'Karir',
                        'Pribadi' => 'Pribadi'
                    ])
                    ->required(),

                    Textarea::make('deskripsi_masalah')
                    ->label('Deskripsi Masalah')
                    ->autosize()
                    ->required(),

                    Textarea::make('sejak_kapan')
                    ->label('Sejak Kapan Masalah Terjadi')
                    ->autosize()
                    ->required(),

                    Textarea::make('tindakan_yang_dilakukan')
                    ->label('Tindakan yang Dilakukan')
                    ->autosize()
                    ->required(),

                    DatePicker::make('tanggal')
                    ->label('Tanggal Pengajuan Konseling')
                    ->required(),

                    Select::make('sesi')
                    ->label('Sesi')
                    ->options([
                        'Pagi' => 'Pagi',
                        'Siang' => 'Siang'
                    ])
                    ->required(),

                    Select::make('jenis_layanan')
                    ->label('Jenis Layanan')
                    ->options([
                        'Online' => 'Online',
                        'Offline' => 'Offline'
                    ])
                    ->required(),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                ->label('Nama Lengkap'),
                TextColumn::make('nim')
                ->label('NIM'),
                TextColumn::make('jurusan')
                ->label('Jurusan'),
                TextColumn::make('prodi')
                ->label('Program Studi'),
                TextColumn::make('kategori_masalah')
                ->label('Kategori Masalah'),
                TextColumn::make('jenis_layanan')
                ->label('Jenis Layanan'),
                TextColumn::make('tanggal')
                ->label('Tanggal Pengajuan Konseling'),
                TextColumn::make('sesi')
                ->label('Sesi'),
                TextColumn::make('status'),
                TextColumn::make('kode_konseling')
                ->label('Kode Konseling'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('downloadPdf')
                ->label('Download PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->url(fn (PengajuanKonseling $record) => route('pengajuan-konseling.export-pdf', $record->id))
                ->openUrlInNewTab() // opsional, kalau mau buka di tab baru
                ->color('success'),
                Action::make('Setujui')
                    ->label('Setujui')
                    ->form([
                        TextInput::make('tempat')->label('Tempat')->required(),
                        Select::make('id_konselor')
                        ->label('Pilih Konselor')
                        ->options(\App\Models\Konselor::all()->pluck('nama', 'id')->toArray())
                        ->searchable()
                        ->required(),
                    ])
                    ->action(function ($record, array $data) {
                        // Ubah status pengajuan
                        $record->status = 'Diterima';
                        $record->save();

                        $tanggal = Carbon::parse($record->tanggal);

                        // Tentukan jam berdasarkan sesi
                        $jam = match ($record->sesi) {
                            'Pagi' => '10:00:00',
                            'Siang' => '14:00:00',
                            default => '10:00:00', // fallback
                        };

                        $jadwal = Carbon::parse($tanggal->toDateString() . ' ' . $jam);

                        // Tambah data ke tabel konseling
                        Konseling::create([
                            'id_pengajuan' => $record->id,
                            'id_konselor' => $data['id_konselor'],
                            'jadwal_konseling' => $jadwal,
                            'tempat' => $data['tempat'],
                            'status' => 'Belum Selesai',
                        ]);
                    })
                    ->icon('heroicon-m-check-circle')
                    ->color('success')
                    ->visible(fn ($record) => $record->status === 'Diproses'),// hanya tampil jika belum disetujui
                    Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPengajuanKonselings::route('/'),
            'create' => Pages\CreatePengajuanKonseling::route('/create'),
            'edit' => Pages\EditPengajuanKonseling::route('/{record}/edit'),
        ];
    }
}
