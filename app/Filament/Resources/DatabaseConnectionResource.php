<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources;

use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 83590b7 (.)
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Setting\Models\DatabaseConnection;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

class DatabaseConnectionResource extends Resource
{
    protected static ?string $model = DatabaseConnection::class;

    protected static ?string $navigationIcon = 'heroicon-o-database';

    protected static ?string $navigationGroup = 'Configurazione';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('driver')
                    ->required()
                    ->options([
                        'mysql' => 'MySQL',
                        'pgsql' => 'PostgreSQL',
                        'sqlite' => 'SQLite',
                        'sqlsrv' => 'SQL Server',
                    ]),
                Forms\Components\TextInput::make('host')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('port')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('database')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('username')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('charset')
                    ->maxLength(255),
                Forms\Components\TextInput::make('collation')
                    ->maxLength(255),
                Forms\Components\TextInput::make('prefix')
                    ->maxLength(255),
                Forms\Components\Toggle::make('strict')
                    ->required(),
                Forms\Components\TextInput::make('engine')
                    ->maxLength(255),
                Forms\Components\KeyValue::make('options'),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('driver')
                    ->searchable(),
                Tables\Columns\TextColumn::make('host')
                    ->searchable(),
                Tables\Columns\TextColumn::make('port')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('database')
                    ->searchable(),
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('charset')
                    ->searchable(),
                Tables\Columns\TextColumn::make('collation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('prefix')
                    ->searchable(),
                Tables\Columns\IconColumn::make('strict')
                    ->boolean(),
                Tables\Columns\TextColumn::make('engine')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
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
                Tables\Actions\ViewAction::make(),
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
<<<<<<< HEAD
=======
use Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;
use Modules\Setting\Models\DatabaseConnection;
use Modules\Xot\Filament\Resources\XotBaseResource;

class DatabaseConnectionResource extends XotBaseResource
{
    protected static ?string $model = DatabaseConnection::class;

    public static function getFormSchema(): array
    {
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

            'driver' => Forms\Components\Select::make('driver')
                ->required()
                ->options([
                    'mysql' => 'MySQL',
                    'pgsql' => 'PostgreSQL',
                    'sqlite' => 'SQLite',
                    'sqlsrv' => 'SQL Server',
                ]),

            'host' => Forms\Components\TextInput::make('host')
                ->required()
                ->maxLength(255),

            'port' => Forms\Components\TextInput::make('port')
                ->required()
                ->numeric()
                ->default(3306),

            'database' => Forms\Components\TextInput::make('database')
                ->required()
                ->maxLength(255),

            'username' => Forms\Components\TextInput::make('username')
                ->required()
                ->maxLength(255),

            'password' => Forms\Components\TextInput::make('password')
                ->password()
                ->required()
                ->maxLength(255),

            'charset' => Forms\Components\TextInput::make('charset')
                ->default('utf8mb4')
                ->maxLength(255),

            'collation' => Forms\Components\TextInput::make('collation')
                ->default('utf8mb4_unicode_ci')
                ->maxLength(255),

            'prefix' => Forms\Components\TextInput::make('prefix')
                ->maxLength(255),

            'strict' => Forms\Components\Toggle::make('strict')
                ->default(true),

            'engine' => Forms\Components\Select::make('engine')
                ->options([
                    'InnoDB' => 'InnoDB',
                    'MyISAM' => 'MyISAM',
                ])
                ->default('InnoDB'),

            'options' => Forms\Components\KeyValue::make('options')
                ->keyLabel('Option Name')
                ->valueLabel('Option Value'),

            'status' => Forms\Components\Select::make('status')
                ->required()
                ->options([
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                    'testing' => 'Testing',
                ])
                ->default('inactive'),
>>>>>>> 5016f6f (.)
=======
>>>>>>> 83590b7 (.)
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDatabaseConnections::route('/'),
            'create' => Pages\CreateDatabaseConnection::route('/create'),
<<<<<<< HEAD
<<<<<<< HEAD
            'view' => Pages\ViewDatabaseConnection::route('/{record}'),
=======
>>>>>>> 5016f6f (.)
=======
            'view' => Pages\ViewDatabaseConnection::route('/{record}'),
>>>>>>> 83590b7 (.)
            'edit' => Pages\EditDatabaseConnection::route('/{record}/edit'),
        ];
    }
}
