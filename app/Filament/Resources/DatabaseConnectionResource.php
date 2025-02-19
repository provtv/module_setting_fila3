<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources;

use Filament\Forms;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;
use Modules\Setting\Models\DatabaseConnection;
use Modules\Xot\Filament\Resources\XotBaseResource;

class DatabaseConnectionResource extends XotBaseResource
{
    protected static ?string $model = DatabaseConnection::class;
    protected static ?string $navigationIcon = 'heroicon-o-database';
    protected static ?string $navigationGroup = 'System';

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\Group::make()
                ->schema([
                    Forms\Components\Section::make('Basic Information')
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
                                ->numeric()
                                ->default(3306),
                        ])->columns(2),

                    Forms\Components\Section::make('Authentication')
                        ->schema([
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
                        ])->columns(2),

                    Forms\Components\Section::make('Configuration')
                        ->schema([
                            Forms\Components\TextInput::make('charset')
                                ->default('utf8mb4')
                                ->maxLength(255),

                            Forms\Components\TextInput::make('collation')
                                ->default('utf8mb4_unicode_ci')
                                ->maxLength(255),

                            Forms\Components\TextInput::make('prefix')
                                ->maxLength(255),

                            Forms\Components\Toggle::make('strict')
                                ->default(true),

                            Forms\Components\Select::make('engine')
                                ->options([
                                    'InnoDB' => 'InnoDB',
                                    'MyISAM' => 'MyISAM',
                                ])
                                ->default('InnoDB'),

                            Forms\Components\Select::make('status')
                                ->required()
                                ->options([
                                    'active' => 'Active',
                                    'inactive' => 'Inactive',
                                    'testing' => 'Testing',
                                ])
                                ->default('inactive'),
                        ])->columns(2),
                ]),

            Forms\Components\Section::make('Advanced Options')
                ->schema([
                    Forms\Components\KeyValue::make('options')
                        ->keyLabel('Option Name')
                        ->valueLabel('Option Value')
                        ->columnSpan('full'),
                ])->collapsible(),
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDatabaseConnections::route('/'),
            'create' => Pages\CreateDatabaseConnection::route('/create'),
            'edit' => Pages\EditDatabaseConnection::route('/{record}/edit'),
        ];
    }
}
