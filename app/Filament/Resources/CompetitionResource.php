<?php

namespace App\Filament\Resources;

use App\CompetitionType;
use App\Filament\Resources\CompetitionResource\Pages;
use App\Filament\Resources\CompetitionResource\RelationManagers;
use App\Models\Competition;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompetitionResource extends Resource
{
    protected static ?string $model = Competition::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Event Management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('event_id')
                    ->label('Event')
                    ->relationship('event', 'name') // Assumes the Event model has a 'name' field
                    ->required(),
                Forms\Components\Textarea::make('rules')
                    ->label('Rules')
                    ->required(),
                Forms\Components\Textarea::make('scoring_system')
                    ->label('Scoring System')
                    ->required(),
                Forms\Components\Textarea::make('prizes')
                    ->label('Prizes')
                    ->required(),
                Forms\Components\Select::make('competition_type')
                    ->options(
                        collect(CompetitionType::cases())->mapWithKeys(fn($type) => [$type->value => $type->name])
                    )

                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('event.name')
                    ->label('Event'),
                Tables\Columns\TextColumn::make('competition_type')
                    ->label('Type'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime(),
            ])
            ->filters([])->actions([
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
            'index' => Pages\ListCompetitions::route('/'),
            'create' => Pages\CreateCompetition::route('/create'),
            'edit' => Pages\EditCompetition::route('/{record}/edit'),
        ];
    }
}
