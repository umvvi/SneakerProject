<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactPersonResource\Pages;
use App\Models\ContactPerson;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class ContactPersonResource extends Resource
{
    protected static ?string $model = ContactPerson::class;

    protected static ?string $navigationLabel = 'Contact Persons';
    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required(),
            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->unique(ContactPerson::class, 'email', ignoreRecord: true),
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
            Tables\Columns\TextColumn::make('email'),
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
            'index' => Pages\ListContactPersons::route('/'),
            'create' => Pages\CreateContactPerson::route('/create'),
            'edit' => Pages\EditContactPerson::route('/{record}/edit'),
        ];
    }
}
