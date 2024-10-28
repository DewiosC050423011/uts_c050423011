<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisBantuanResource\Pages;
use App\Filament\Resources\JenisBantuanResource\RelationManagers;
use App\Models\JenisBantuan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisBantuanResource extends Resource
{
    protected static ?string $model = JenisBantuan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_jenis_bantuan')
                ->required()
                ->maxLength(255),

                Forms\Components\TextInput::make('keterangan')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_jenis_bantuan')
                ->searchable()

            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListJenisBantuans::route('/'),
            'create' => Pages\CreateJenisBantuan::route('/create'),
            'edit' => Pages\EditJenisBantuan::route('/{record}/edit'),
        ];
    }
}
