<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6d0eff2 (.)
use Filament\Pages\Actions;
=======
use Filament\Actions;
>>>>>>> origin/dev
<<<<<<< HEAD
=======
use Filament\Actions;
>>>>>>> b0c60891b (.)
=======
>>>>>>> 6d0eff2 (.)
use Filament\Resources\Pages\EditRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class EditDatabaseConnection extends EditRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6d0eff2 (.)
    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('test')
                ->action(fn () => $this->record !== null ? $this->record->testConnection() : false)
                ->icon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }

    protected function afterSave(): void
    {
        if ($this->record !== null && 'active' === $this->record->status) {
            $this->record->testConnection();
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
=======
<<<<<<< HEAD
=======
>>>>>>> b0c60891b (.)
=======
>>>>>>> 6d0eff2 (.)
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> b0c60891b (.)
=======
>>>>>>> origin/dev
>>>>>>> 6d0eff2 (.)
}
