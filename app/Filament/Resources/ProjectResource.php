<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use UnitEnum;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static UnitEnum|string|null $navigationGroup = 'Site';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Schemas\Components\Group::make()
                    ->schema([
                        Schemas\Components\Section::make('Project Information')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->autofocus()
                                    ->required()
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('slug')
                                    ->disabled()
                                    ->dehydrated(false)
                                    ->columnSpan(1),
                                Forms\Components\Textarea::make('description')
                                    ->required()
                                    ->columnSpan(2),
                            ]),
                    ])
                    ->columnSpan(['lg' => 3]),

                Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                    ->collection('projects')
                    ->rules(['image', 'max:1024'])
                    ->responsiveImages()
                    ->columnSpan(['lg' => 2]),

                Schemas\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\ColorPicker::make('background'),
                        Forms\Components\TextInput::make('url')->nullable(),
                        Forms\Components\Toggle::make('active'),
                    ])
                    ->columnSpan(['lg' => 1]),

                Schemas\Components\Section::make()
                    ->schema([
                        Forms\Components\MarkdownEditor::make('content')
                            ->nullable(),
                    ]),
            ])
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('image')
                    ->collection('projects')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->wrap()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\ColorColumn::make('background')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date('M j, Y')
                    ->toggleable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('active')
                    ->query(fn (Builder $query) => $query->where('active', true)),
            ])
            ->actions([
                Actions\EditAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                    Actions\BulkAction::make('Toggle Active')
                        ->requiresConfirmation()
                        ->icon('heroicon-o-check')
                        ->action(function (Collection $records) {
                            /** @var Collection<Project> $records */
                            return $records->each(fn (Project $record) => $record->update(['active' => ! $record->active]));
                        }),
                ]),
            ])
            ->persistSearchInSession()
            ->persistFiltersInSession()
            ->persistSortInSession();
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
