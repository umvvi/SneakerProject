<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\FileUpload;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationLabel = 'Events';
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Event Name')
                ->required(),

            Forms\Components\DatePicker::make('date')
                ->label('Event Date')
                ->required(),

            Forms\Components\TextInput::make('location')
                ->label('Location')
                ->required(),

            Forms\Components\TextInput::make('number_of_tickets_per_timeslot')
                ->label('Tickets Per Timeslot')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('available_stands')
                ->label('Available Stands')
                ->numeric()
                ->default(0)
                ->required(),

            FileUpload::make('image')
                ->required()
                ->directory('event-attachments')
                ->preserveFilenames()
                ->image()
                ->imageEditor(),

            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true),

            Forms\Components\Textarea::make('remark')
                ->label('Remark')
                ->nullable(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Event Name'),

            Tables\Columns\TextColumn::make('date')
                ->label('Event Date')
                ->date(),

            Tables\Columns\TextColumn::make('location')
                ->label('Location'),

            Tables\Columns\TextColumn::make('number_of_tickets_per_timeslot')
                ->label('Tickets Per Timeslot'),

            Tables\Columns\BooleanColumn::make('is_active')
                ->label('Active'),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->dateTime(),
        ])
            ->filters([
                Tables\Filters\Filter::make('active')
                    ->query(fn ($query) => $query->where('is_active', true)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
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
