<?php

namespace App\Filament\Resources\EventResource;

use App\Models\Event;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\DateColumn;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                Textarea::make('description')->required(),
                TextInput::make('image')->required(), // Assuming this is a URL or path
                Toggle::make('is_visible')->label('Visible')->default(true),
                DatePicker::make('start_date')->required(),
                DatePicker::make('end_date')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Event Name'),
                TextColumn::make('description')->label('Description'),
                BooleanColumn::make('is_visible')->label('Visible'),
                DateColumn::make('start_date')->label('Start Date'),
                DateColumn::make('end_date')->label('End Date'),
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
