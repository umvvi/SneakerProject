<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PriceResource\Pages;
use App\Models\Price;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class PriceResource extends Resource
{
    protected static ?string $model = Price::class;

    protected static ?string $navigationLabel = 'Prices';
    protected static ?string $navigationIcon = 'heroicon-o-currency-euro';

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
            Forms\Components\TextInput::make('rate')
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
            Tables\Columns\TextColumn::make('rate')->money('EUR'),
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
            'index' => Pages\ListPrices::route('/'),
            'create' => Pages\CreatePrice::route('/create'),
            'edit' => Pages\EditPrice::route('/{record}/edit'),
        ];
    }
}
