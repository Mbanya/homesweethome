<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyPlanResource\Pages;
use App\Filament\Resources\PropertyPlanResource\RelationManagers;
use App\Models\Property;
use App\Models\PropertyPlan;
use App\Rules\SafeFile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropertyPlanResource extends Resource
{
    protected static ?string $model = PropertyPlan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('details')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('property_id')
                    ->options(Property::all()->pluck('title','id')->toArray())
                    ->searchable()
                    ->label('Property')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/gif'])
                    ->maxSize(2048)
                    ->rules([new SafeFile(['image/jpeg', 'image/png', 'image/webp', 'image/gif'])])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('details')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListPropertyPlans::route('/'),
            'create' => Pages\CreatePropertyPlan::route('/create'),
            'edit' => Pages\EditPropertyPlan::route('/{record}/edit'),
        ];
    }
}
