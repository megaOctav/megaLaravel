<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DekanResource\Pages;
use App\Filament\Resources\DekanResource\RelationManagers;
use App\Models\Dekan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DekanResource extends Resource
{
    protected static ?string $model = Dekan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\TextInput::make('bidang'),
                Forms\Components\Select::make('fakultas_id')
                ->relationship('fakultas', 'name')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('bidang'),
                Tables\Columns\TextColumn::make('fakultas_id')
                
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('fakultas_id')
                    ->relationship('fakultas', 'name')

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
            'index' => Pages\ListDekans::route('/'),
            'create' => Pages\CreateDekan::route('/create'),
            'edit' => Pages\EditDekan::route('/{record}/edit'),
        ];
    }
}
