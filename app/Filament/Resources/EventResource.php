<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Events';  // Optional: Set a navigation group
    protected static ?string $navigationLabel = 'Events';  // Optional: Set a navigation label
    protected static ?string $navigationIcon = 'heroicon-o-calendar';  // Set a navigation icon (optional)


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\TimePicker::make('time')
                    ->required(),
                Forms\Components\TextInput::make('location')
                    ->required(),
                Forms\Components\TextInput::make('guests'),
                Forms\Components\TextInput::make('max_capacity')
                    ->numeric(),
                Forms\Components\TextInput::make('ticket_price')
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\Select::make('club_id')
                    ->relationship('club', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('club.name')
                    ->label('Club')
                    ->sortable(),
                Tables\Columns\TextColumn::make('formattedDate')
                    ->label('Date')
                    ->sortable(),
                Tables\Columns\TextColumn::make('formattedTime')
                    ->label('Time')
                    ->sortable(),
                Tables\Columns\TextColumn::make('location')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ticket_price')
                    ->money('USD'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
