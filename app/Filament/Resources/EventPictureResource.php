<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventPictureResource\Pages;
use App\Filament\Resources\EventPictureResource\RelationManagers;
use App\Models\EventPicture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventPictureResource extends Resource
{
    protected static ?string $model = EventPicture::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Event Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('event_id')
                    ->relationship('event', 'name')
                    ->required()
                    ->label('Event'),
                Forms\Components\FileUpload::make('picture')
                    ->image()
                    ->required()
                    ->label('Picture'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('event.name')
                    ->label('Event')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('picture')
                    ->label('Picture'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEventPictures::route('/'),
            'create' => Pages\CreateEventPicture::route('/create'),
            'edit' => Pages\EditEventPicture::route('/{record}/edit'),
        ];
    }
}
