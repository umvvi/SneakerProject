<?php

namespace App\Filament\Resources\AttendeeResource;

use App\Models\Attendee;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\AttendeeResource\Pages;

class AttendeeResource extends Resource
{
    protected static ?string $model = Attendee::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship('user', 'name') // Ensure this relationship exists in your User model
                    ->required(),
                Select::make('event_id')
                    ->relationship('event', 'name') // Ensure this relationship exists in your Event model
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('User'), // Ensure the relationship exists
                TextColumn::make('event.name')->label('Event'), // Ensure the relationship exists
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAttendees::route('/'),
            'create' => Pages\CreateAttendee::route('/create'),
            'edit' => Pages\EditAttendee::route('/{record}/edit'),
        ];
    }
}
