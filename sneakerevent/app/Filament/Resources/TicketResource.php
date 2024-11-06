<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationLabel = 'Tickets';
    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\Select::make('event_id')
                ->relationship('event', 'name')
                ->required(),
            Forms\Components\DatePicker::make('date')
                ->required(),
            Forms\Components\TextInput::make('time_slot')
                ->required(),
            Forms\Components\Select::make('price_id') // This should match the field in the database
            ->relationship('price', 'rate') // Changed from 'amount' to 'rate'
            ->required(),
            Forms\Components\TextInput::make('number_of_tickets') // Correct field name for number of tickets
            ->numeric()
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
            Tables\Columns\TextColumn::make('event.name')->label('Event'),
            Tables\Columns\TextColumn::make('date')->date(),
            Tables\Columns\TextColumn::make('time_slot'),
            Tables\Columns\TextColumn::make('price.rate') // Changed from 'price' to 'price.rate'
            ->money('EUR'), // Using the rate column for display
            Tables\Columns\BooleanColumn::make('is_active')->label('Active'),
            Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
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
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
        ];
    }
}
