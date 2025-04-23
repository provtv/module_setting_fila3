<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 32e0311 (🔄 Aggiornamento subtree)
=======
=======
>>>>>>> 6d0eff2 (.)
>>>>>>> a76ea76 (fix: auto resolve conflict)
=======
=======
>>>>>>> 6d0eff2 (.)
=======
>>>>>>> 56c9860 (.)
>>>>>>> 720925c (fix: auto resolve conflict)
use Filament\Resources\Pages\ListRecords;
=======
use Filament\Tables;
>>>>>>> b13caf8 (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Table;
use Modules\Setting\Filament\Actions\Table\DatabaseBackupTableAction;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListDatabaseConnections extends XotBaseListRecords
{
    protected static string $resource = DatabaseConnectionResource::class;

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->searchable()
                ->sortable(),

            TextColumn::make('driver')
                ->searchable()
                ->sortable(),

            TextColumn::make('host')
                ->searchable(),

            TextColumn::make('database')
                ->searchable()
                ->sortable(),

            BadgeColumn::make('status')
                ->colors([
                    'danger' => 'inactive',
                    'warning' => 'testing',
                    'success' => 'active',
                ]),

            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 720925c (fix: auto resolve conflict)
=======
<<<<<<< HEAD
=======
>>>>>>> b0c60891b (.)
=======
>>>>>>> 6d0eff2 (.)
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Setting\Filament\Actions\Table\DatabaseBackupTableAction;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListDatabaseConnections extends XotBaseListRecords
{
    protected static string $resource = DatabaseConnectionResource::class;

    public function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->searchable()->sortable(),
            TextColumn::make('driver')->searchable()->sortable(),
            TextColumn::make('database')->searchable()->sortable(),
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> b0c60891b (.)
<<<<<<< HEAD
>>>>>>> 32e0311 (🔄 Aggiornamento subtree)
=======
=======
>>>>>>> origin/dev
>>>>>>> 6d0eff2 (.)
<<<<<<< HEAD
>>>>>>> a76ea76 (fix: auto resolve conflict)
=======
=======
>>>>>>> 56c9860 (.)
>>>>>>> 720925c (fix: auto resolve conflict)
=======
>>>>>>> b13caf8 (.)
        ];
    }

    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 32e0311 (🔄 Aggiornamento subtree)
=======
=======
>>>>>>> 6d0eff2 (.)
>>>>>>> a76ea76 (fix: auto resolve conflict)
=======
=======
>>>>>>> 6d0eff2 (.)
=======
>>>>>>> 56c9860 (.)
>>>>>>> 720925c (fix: auto resolve conflict)
=======
>>>>>>> b13caf8 (.)
            SelectFilter::make('driver')
                ->options([
                    'mysql' => 'MySQL',
                    'pgsql' => 'PostgreSQL',
                    'sqlite' => 'SQLite',
                    'sqlsrv' => 'SQL Server',
                ]),

            SelectFilter::make('status')
                ->options([
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                    'testing' => 'Testing',
                ]),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 720925c (fix: auto resolve conflict)
=======
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> b0c60891b (.)
<<<<<<< HEAD
>>>>>>> 32e0311 (🔄 Aggiornamento subtree)
=======
=======
>>>>>>> 6d0eff2 (.)
<<<<<<< HEAD
>>>>>>> a76ea76 (fix: auto resolve conflict)
=======
=======
>>>>>>> 56c9860 (.)
>>>>>>> 720925c (fix: auto resolve conflict)
=======
>>>>>>> b13caf8 (.)
        ];
    }

    public function getTableActions(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 32e0311 (🔄 Aggiornamento subtree)
=======
=======
>>>>>>> 6d0eff2 (.)
>>>>>>> a76ea76 (fix: auto resolve conflict)
=======
=======
>>>>>>> 6d0eff2 (.)
=======
>>>>>>> 56c9860 (.)
>>>>>>> 720925c (fix: auto resolve conflict)
=======
>>>>>>> b13caf8 (.)
            EditAction::make(),
            DeleteAction::make(),
            Action::make('test')
                ->action(fn ($record) => $record->testConnection())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 720925c (fix: auto resolve conflict)
=======
            // Tables\Actions\EditAction::make(),
            DatabaseBackupTableAction::make(),
>>>>>>> origin/dev
<<<<<<< HEAD
=======
            // Tables\Actions\EditAction::make(),
            DatabaseBackupTableAction::make(),
>>>>>>> b0c60891b (.)
<<<<<<< HEAD
>>>>>>> 32e0311 (🔄 Aggiornamento subtree)
=======
=======
>>>>>>> 6d0eff2 (.)
<<<<<<< HEAD
>>>>>>> a76ea76 (fix: auto resolve conflict)
=======
=======
>>>>>>> 56c9860 (.)
>>>>>>> 720925c (fix: auto resolve conflict)
=======
            DatabaseBackupTableAction::make(),
>>>>>>> b13caf8 (.)
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 32e0311 (🔄 Aggiornamento subtree)
=======
=======
>>>>>>> 6d0eff2 (.)
>>>>>>> a76ea76 (fix: auto resolve conflict)
=======
=======
>>>>>>> 6d0eff2 (.)
=======
>>>>>>> 56c9860 (.)
>>>>>>> 720925c (fix: auto resolve conflict)
=======
>>>>>>> b13caf8 (.)
            DeleteBulkAction::make(),
        ];
    }

    public function getTableHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 720925c (fix: auto resolve conflict)
=======
<<<<<<< HEAD
=======
>>>>>>> b0c60891b (.)
=======
>>>>>>> 6d0eff2 (.)
            // Tables\Actions\BulkActionGroup::make([
            Tables\Actions\DeleteBulkAction::make(),
            // ]),
        ];
=======
>>>>>>> b13caf8 (.)
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getListTableColumns())
            ->filters($this->getTableFilters())
            ->actions($this->getTableActions())
<<<<<<< HEAD
            ->bulkActions($this->getTableBulkActions());
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> b0c60891b (.)
<<<<<<< HEAD
>>>>>>> 32e0311 (🔄 Aggiornamento subtree)
=======
=======
>>>>>>> origin/dev
>>>>>>> 6d0eff2 (.)
<<<<<<< HEAD
>>>>>>> a76ea76 (fix: auto resolve conflict)
=======
=======
>>>>>>> 56c9860 (.)
>>>>>>> 720925c (fix: auto resolve conflict)
=======
            ->bulkActions($this->getTableBulkActions())
            ->headerActions($this->getTableHeaderActions());
>>>>>>> b13caf8 (.)
    }
}
