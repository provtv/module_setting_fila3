<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions;
=======
use Filament\Pages\Actions;
>>>>>>> 5016f6f (.)
=======
use Filament\Actions;
>>>>>>> 83590b7 (.)
use Filament\Resources\Pages\EditRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class EditDatabaseConnection extends EditRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    protected function getHeaderActions(): array
=======
    protected function getActions(): array
>>>>>>> 5016f6f (.)
=======
    protected function getHeaderActions(): array
>>>>>>> 83590b7 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        if ('active' === $this->record->status) {
=======
        if ($this->record->status === 'active') {
>>>>>>> 5016f6f (.)
=======
        if ('active' === $this->record->status) {
>>>>>>> 83590b7 (.)
            $this->record->testConnection();
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
