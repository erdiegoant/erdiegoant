<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationGroup = 'Site';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Project Information')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->autofocus()
                                    ->required()
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('slug')
                                    ->disabled()
                                    ->columnSpan(1),
                                Forms\Components\Textarea::make('description')
                                    ->required()
                                    ->columnSpan(2),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => fn (?Project $record) => $record === null ? 3 : 2]),

                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\ColorPicker::make('background'),
                        Forms\Components\TextInput::make('url'),
                        Forms\Components\Toggle::make('active'),
                    ])
                    ->columnSpan(['lg' => 1]),

                Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                    ->collection('projects')
                    ->rules(['image', 'max:1024'])
                    ->responsiveImages()
                    ->columnSpan(['lg' => 3]),

                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\MarkdownEditor::make('content')
                            ->required(),
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
