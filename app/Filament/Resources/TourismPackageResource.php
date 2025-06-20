<?php
namespace App\Filament\Resources;

use App\Filament\Resources\TourismPackageResource\Pages;
use App\Models\TourismPackage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TourismPackageResource extends Resource
{
    protected static ?string $model = TourismPackage::class;
    protected static ?string $navigationIcon = 'heroicon-o-gift';
    protected static ?string $navigationLabel = 'Paket Wisata';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Paket')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('icon')
                    ->label('Icon (Emoji)')
                    ->placeholder('💑')
                    ->maxLength(10),

                Forms\Components\TextInput::make('price')
                    ->label('Harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),

                Forms\Components\TextInput::make('unit')
                    ->label('Satuan')
                    ->required()
                    ->default('per person')
                    ->maxLength(255),

                Forms\Components\TagsInput::make('features')
                    ->label('Fitur-fitur')
                    ->placeholder('Masukkan fitur...')
                    ->required(),

                Forms\Components\Toggle::make('is_featured')
                    ->label('Paket Unggulan'),

                Forms\Components\Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),

                Forms\Components\TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Paket')
                    ->searchable(),

                Tables\Columns\TextColumn::make('icon')
                    ->label('Icon'),

                Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR')
                    ->sortable(),

                Tables\Columns\TextColumn::make('unit')
                    ->label('Satuan'),

                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Unggulan')
                    ->boolean(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Paket Unggulan'),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTourismPackages::route('/'),
            'create' => Pages\CreateTourismPackage::route('/create'),
            'edit' => Pages\EditTourismPackage::route('/{record}/edit'),
        ];
    }
}
