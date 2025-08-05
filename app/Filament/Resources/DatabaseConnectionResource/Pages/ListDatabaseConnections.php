<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 83590b7 (.)
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ListDatabaseConnections extends ListRecords
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('driver')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('host')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('database')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'active' => 'success',
                    'inactive' => 'danger',
                    'testing' => 'warning',
                    default => 'gray',
                }),
        ];
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns($this->getTableColumns())
            ->filters([
                Tables\Filters\SelectFilter::make('driver')
                    ->options([
                        'mysql' => 'MySQL',
                        'pgsql' => 'PostgreSQL',
                        'sqlite' => 'SQLite',
                        'sqlsrv' => 'SQL Server',
                    ]),
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'testing' => 'Testing',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('test')
                    ->action(fn ($record) => $record->testConnection())
                    ->icon('heroicon-o-check-circle')
                    ->color('success'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
<<<<<<< HEAD
=======
use Filament\Tables;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListDatabaseConnections extends XotBaseListRecords
{
    protected static string $resource = DatabaseConnectionResource::class;

    public function getTableColumns(): array
    {
        return [
            'name' => Tables\Columns\TextColumn::make('name')
                ->searchable(),
            'driver' => Tables\Columns\TextColumn::make('driver')
                ->searchable(),
            'host' => Tables\Columns\TextColumn::make('host')
                ->searchable(),
            'database' => Tables\Columns\TextColumn::make('database')
                ->searchable(),
            'status' => Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'danger' => 'inactive',
                    'warning' => 'testing',
                    'success' => 'active',
                ]),
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
        ];
    }

    public function getTableFilters(): array
    {
        return [
            'driver' => Tables\Filters\SelectFilter::make('driver')
                ->options([
                    'mysql' => 'MySQL',
                    'pgsql' => 'PostgreSQL',
                    'sqlite' => 'SQLite',
                    'sqlsrv' => 'SQL Server',
                ]),
            'status' => Tables\Filters\SelectFilter::make('status')
                ->options([
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                    'testing' => 'Testing',
                ]),
        ];
    }

    public function getTableActions(): array
    {
        return [
            'edit' => Tables\Actions\EditAction::make(),
            'delete' => Tables\Actions\DeleteAction::make(),
            'test' => Tables\Actions\Action::make('test')
                ->action(fn ($record) => $record->testConnection())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            'delete' => Tables\Actions\DeleteBulkAction::make(),
        ];
    }

    public function getTableHeaderActions(): array
    {
        return [
            'create' => Tables\Actions\CreateAction::make(),
        ];
>>>>>>> 5016f6f (.)
=======
>>>>>>> 83590b7 (.)
    }
}
