<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Club Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Name'),
                Forms\Components\TextInput::make('post')
                    ->label('Post')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Email'),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->label('Profile Image'),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->label('Phone Number'),
                Forms\Components\Select::make('club_id')
                    ->relationship('club', 'name')
                    ->required()
                    ->label('Club'),
                Forms\Components\Checkbox::make('incharge')
                    ->label('Is Incharge'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Name'),
                Tables\Columns\TextColumn::make('post')
                    ->label('Post'),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email'),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Profile Image'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone'),
                Tables\Columns\TextColumn::make('club.name')
                    ->label('Club')
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('incharge')
                    ->label('Incharge'),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}

