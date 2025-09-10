<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ViewDatabaseConnection extends ViewRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
            Actions\Action::make('test')
<<<<<<< HEAD
                ->action(fn () => $this->record->testConnection())
=======
                ->action(function () {
                    /** @var \Modules\Setting\Models\DatabaseConnection|null $record */
                    $record = $this->record;
                    $record?->testConnection();
                })
>>>>>>> 712790c (.)
                ->icon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }
} 