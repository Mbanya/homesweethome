<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
//use App\Filament\Resources\PropertyResource\RelationManagers;
use App\Models\City;
//use App\Models\Country;
use App\Models\HouseType;
use App\Models\Property;
use App\Models\SaleType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Livewire;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('details')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('house_type_id')
                    ->options(
                        HouseType::all()->pluck('name','id')->toArray()
                    )->placeholder('Select House Type')
                    ->label('House Type')
                    ->required()
                    ->searchable(),
                Forms\Components\Select::make('sale_type_id')
                    ->options(SaleType::all()->pluck('name','id')->toArray())
                    ->searchable()
                    ->label('Sale Type')
                    ->required(),
                Forms\Components\Select::make('city_id')
                    ->options(City::query()->whereIn('country_id',[113,229,70,183,161,204,218])
                        ->pluck('name','id')->toArray())
                    ->searchable()
                    ->loadingMessage('Loading cities...')
                    ->preload()
                    ->label('City')
                    ->required(),
                Forms\Components\TextInput::make('address_1')
                    ->maxLength(255),
                Forms\Components\TextInput::make('address_2')
                    ->maxLength(255),
                Forms\Components\TextInput::make('address_3')
                    ->maxLength(255),
                Forms\Components\TextInput::make('number_of_beds')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('number_of_baths')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('property_size')
                    ->maxLength(255),
                Forms\Components\Toggle::make('pets_allowed')
                    ->required(),
                Forms\Components\Toggle::make('dishwasher')
                    ->required(),
                Forms\Components\Toggle::make('furnished')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\Toggle::make('featured')
                    ->required(),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('house_type_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sale_type.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('city.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('address_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address_3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number_of_beds')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number_of_baths')
                    ->searchable(),
                Tables\Columns\TextColumn::make('property_size')
                    ->searchable(),
                Tables\Columns\IconColumn::make('pets_allowed')
                    ->boolean(),
                Tables\Columns\IconColumn::make('dishwasher')
                    ->boolean(),
                Tables\Columns\IconColumn::make('furnished')
                    ->boolean(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\IconColumn::make('featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}
