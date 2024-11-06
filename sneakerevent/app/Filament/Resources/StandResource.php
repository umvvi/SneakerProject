<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StandResource\Pages;
use App\Models\Stand;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class StandResource extends Resource
{
    protected static ?string $model = Stand::class;

    protected static ?string $navigationLabel = 'Stands';
    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\Select::make('seller_id')
                ->relationship('seller', 'name')
                ->required(),

            Forms\Components\Select::make('stand_type')
                ->options([
                    ''
                ]),

            Forms\Components\TextInput::make('price')
                ->numeric()
                ->required(),

            Forms\Components\Toggle::make('rented_status')
                ->label('Rented')
                ->default(false),

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
            Tables\Columns\TextColumn::make('seller.name')->label('Seller'),
            Tables\Columns\TextColumn::make('event.name')->label('Event'),
            Tables\Columns\TextColumn::make('location'),
            Tables\Columns\TextColumn::make('price')->money('EUR'),
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
            'index' => Pages\ListStands::route('/'),
            'create' => Pages\CreateStand::route('/create'),
            'edit' => Pages\EditStand::route('/{record}/edit'),
        ];
    }
}
