<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Support\Colors\Color;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TagsColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                MarkdownEditor::make('content')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'heading',
                        'bulletList',
                        'orderedList',
                        'link',
                        'codeBlock',
                        'blockquote',
                        'undo',
                        'redo'
                    ])
                    ->disableToolBarButtons([
                        'attachFiles'
                    ])
                    ->extraAttributes(['class' => 'resize-y overflow-auto'])
                    ->columnSpanFull(),
                Select::make('category')
                    ->required()
                    ->native(false)
                    ->options([
                        'berita' => 'Berita',
                        'prestasi' => 'Prestasi',
                        'pengumuman' => 'Pengumuman',
                    ]),
                TagsInput::make('tags')
                    ->suggestions([
                        'SIJA',
                        'TE',
                        'TO',
                        'KPBS',
                        'TKP',
                        'TKL',
                        'TFLM',
                    ])
                    ->splitKeys(['Tab', ',', ' '])
                    ->color('gray')
                    ->reorderable(),
                FileUpload::make('image')
                    ->label('Gallery (Documentation)')
                    ->helperText('The first image is going to be used as blog thumbnail')
                    ->disk('public')
                    ->directory('blog')
                    ->multiple()
                    ->reorderable()
                    ->columnSpanFull()
                    ->image()
                    ->minFiles(1)
                    ->maxFiles(5)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('category')->sortable(),
                TagsColumn::make('tags')
                    ->badge()
                    ->color(function (string $state) {
                        return match ($state) {
                            'SIJA' => Color::Pink,
                            'TE' => Color::Yellow,
                            'TKL' => Color::Yellow,
                            'TO' => Color::Blue,
                            'TFLM' => Color::Blue,
                            'KPBS' => Color::Orange,
                            'TKP' => Color::Orange,
                            default => Color::Gray,
                        };
                    }),
                ImageColumn::make('image')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->getStateUsing(fn ($record) => collect($record->image)->last()),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
