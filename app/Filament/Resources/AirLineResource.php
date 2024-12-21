<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirLineResource\Pages;
use App\Filament\Resources\AirLineResource\RelationManagers;
use App\Models\AirLine;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AirLineResource extends Resource
{
    protected static ?string $model = AirLine::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([Forms\Components\TextInput::make('code')->required()->placeholder('Code'), Forms\Components\TextInput::make('name')->required()->placeholder('Name'), Forms\Components\FileUpload::make('logo')->image()->directory('airlines')->required()->columnSpan(2)]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                tables\Columns\TextColumn::make('code'),
                tables\Columns\TextColumn::make('name'),
                tables\Columns\ImageColumn::make('logo'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(), 
                Tables\Actions\EditAction::make(), 
                Tables\Actions\DeleteAction::make()
                ])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
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
            'index' => Pages\ListAirLines::route('/'),
            'create' => Pages\CreateAirLine::route('/create'),
            'edit' => Pages\EditAirLine::route('/{record}/edit'),
        ];
    }
}
