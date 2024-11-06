<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganizerResource\Pages;
use App\Models\Organizer;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class OrganizerResource extends Resource
{
    protected static ?string $model = Organizer::class;

    protected static ?string $navigationLabel = 'Organizers';
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required(),
            Forms\Components\TextInput::make('username')
                ->required()
                ->unique(Organizer::class, 'username', ignoreRecord: true),
            Forms\Components\TextInput::make('password')
                ->password()
                ->required(),
            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true),
            Forms\Components\Textarea::make('remark')
                ->nullable(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('username'),
            Tables\Columns\BooleanColumn::make('is_active')
                ->label('Active'),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->dateTime(),
        ])
            ->filters([
                Tables\Filters\Filter::make('active')->query(fn ($query) => $query->where('is_active', true)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrganizers::route('/'),
            'create' => Pages\CreateOrganizer::route('/create'),
            'edit' => Pages\EditOrganizer::route('/{record}/edit'),
        ];
    }
}
