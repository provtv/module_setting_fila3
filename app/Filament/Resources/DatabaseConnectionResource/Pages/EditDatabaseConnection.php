<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
use Filament\Pages\Actions;
=======
use Filament\Actions;
>>>>>>> 8c16834 (.)
use Filament\Resources\Pages\EditRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class EditDatabaseConnection extends EditRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

<<<<<<< HEAD
    protected function getActions(): array
=======
    protected function getHeaderActions(): array
>>>>>>> 8c16834 (.)
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('test')
                ->action(fn () => $this->record->testConnection())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }

    protected function afterSave(): void
    {
        if ('active' === $this->record->status) {
            $this->record->testConnection();
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
