<?php

namespace App\Filament\Resources\TicketResource;

use App\Models\Ticket;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    public static function form(Form $form): Form // Changed to static
    {
        return $form
            ->schema([
                Select::make('event_id')
                    ->relationship('event', 'name')
                    ->required(),
                TextInput::make('name')->required(),
                TextInput::make('city')->required(),
                // Add any other fields you need
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('event.name')->label('Event'),
                TextColumn::make('name')->label('Name'),
                TextColumn::make('city')->label('City'),
                // Add any other columns you need
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
        ];
    }
}
