<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingsResource\Pages;
use App\Models\SiteSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SiteSettingsResource extends Resource
{
    protected static ?string $model = SiteSettings::class;

    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Site Settings')
                    ->schema([
                        Forms\Components\TextInput::make('title'),
                        Forms\Components\TextInput::make('description'),
                    ]),
                Forms\Components\Section::make('Images')
                    ->schema([
                        Forms\Components\SpatieMediaLibraryFileUpload::make('avatar')
                            ->collection('avatar')
                            ->responsiveImages()
                            ->rules('image'),
                        Forms\Components\SpatieMediaLibraryFileUpload::make('social')
                            ->collection('social')
                            ->rules('image|dimensions:min_width=1200,min_height=630'),
                    ])
                    ->columns(2)
                    ->collapsible(),
                Forms\Components\Section::make('Site Content')
                    ->schema([
                        Forms\Components\Repeater::make('content')
                            ->schema([
                                Forms\Components\Textarea::make('text')
                                    ->rows(3),
                            ])
                            ->reorderable(false)
                            ->columns('1'),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('avatar')
                    ->collection('avatar'),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('social')
                    ->collection('social'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSettings::route('/create'),
            'edit' => Pages\EditSiteSettings::route('/{record}/edit'),
        ];
    }
}
