<?php

namespace App\Filament\Resources;

use App\EventType;
use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Carbon\Carbon;
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

    protected static ?string $navigationLabel = 'Events';
    protected static ?string $navigationGroup = 'Event Management';
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

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
                Forms\Components\DatePicker::make('start_date')
                    ->required(),
                Forms\Components\TextInput::make('duration')
                    ->label('Duration (e.g., HH:MM)')
                    ->required()
                    ->helperText('Enter duration in HH:MM format.'),

                Forms\Components\TextInput::make('location')
                    ->required(),
                Forms\Components\TextInput::make('guests'),
                Forms\Components\TextInput::make('max_capacity')
                    ->numeric(),

                // Forms\Components\Select::make('event_type')
                //     ->options([
                //         'competition' => 'Competition',
                //         'workshop' => 'Workshop',
                //         'lecture' => 'Lecture',
                //     ])
                //     ->required(),
                Forms\Components\Select::make('event_type')
                    ->options(
                        collect(EventType::cases())->mapWithKeys(fn($type) => [])
                    )
                    ->required(),
                Forms\Components\Select::make('club_id')
                    ->relationship('club', 'name')
                    ->required(),
                Forms\Components\Repeater::make('pictures')
                    ->relationship('pictures')
                    ->schema([
                        Forms\Components\FileUpload::make('picture')
                            ->image()
                            ->label('Picture'),
                        Forms\Components\TextInput::make('caption')
                            ->label('Caption')
                            ->maxLength(255),
                    ])
                    ->label('Event Pictures'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duration')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('club.name')
                    ->label('Club')
                    ->sortable(),
                Tables\Columns\TextColumn::make('formattedDate')
                    ->label('Date')
                    ->sortable(),
                Tables\Columns\TextColumn::make('event_type')
                    ->label('Event type')
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
