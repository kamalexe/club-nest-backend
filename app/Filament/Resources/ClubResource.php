<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClubResource\Pages;
use App\Filament\Resources\ClubResource\RelationManagers;
use App\Models\Club;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class ClubResource extends Resource
{
    protected static ?string $model = Club::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Club Name'),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->label('Description'),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->label('Club Image'),
                Forms\Components\HasManyRepeater::make('members')
                    ->relationship('members')
                    ->label('Club Members')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Member Name'),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->label('Email'),
                        Forms\Components\TextInput::make('post')
                            ->label('Post'),
                        Forms\Components\TextInput::make('phone')
                            ->label('Phone'),
                        Forms\Components\Checkbox::make('incharge')
                            ->label('Is Incharge?'),
                    ]),
                Forms\Components\HasManyRepeater::make('events')
                    ->relationship('events')
                    ->label('Events')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Event Name'),
                        Forms\Components\DatePicker::make('date')
                            ->required()
                            ->label('Event Date'),
                        Forms\Components\TimePicker::make('time')
                            ->required()
                            ->label('Event Time'),
                        Forms\Components\TextInput::make('location')
                            ->label('Location'),
                        Forms\Components\TextInput::make('ticket_price')
                            ->numeric()
                            ->label('Ticket Price'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Club Name'),
                Tables\Columns\TextColumn::make('description')
                    ->limit(50)
                    ->label('Description'),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Club Image'),
                Tables\Columns\TextColumn::make('members_count')
                    ->counts('members')
                    ->label('Total Members'),
                Tables\Columns\TextColumn::make('events_count')
                    ->counts('events')
                    ->label('Total Events'),
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
            'index' => Pages\ListClubs::route('/'),
            'create' => Pages\CreateClub::route('/create'),
            'edit' => Pages\EditClub::route('/{record}/edit'),
        ];
    }
}
