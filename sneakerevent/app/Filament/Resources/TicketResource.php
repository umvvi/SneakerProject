<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    public static function form(Form|Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('event_id')
                ->relationship('event', 'name')
                ->required(),
            TextInput::make('name')->required(),
            TextInput::make('email')->required()->email(),
            TextInput::make('entry_time')->required(),
            TextInput::make('ticket_count')->required()->numeric(),
        ]);
    }

    public static function table(Table|\Filament\Tables\Table $table): \Filament\Tables\Table
    {
        return $table->columns([
            TextColumn::make('name'),
            TextColumn::make('email'),
            TextColumn::make('event.name')->label('Event'),
            TextColumn::make('entry_time'),
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
