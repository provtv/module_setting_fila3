<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class EditDatabaseConnection extends EditRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
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

    protected function afterSave(): void
    {
<<<<<<< HEAD
        if ('active' === $this->record->status) {
            $this->record->testConnection();
=======
        /** @var \Modules\Setting\Models\DatabaseConnection|null $record */
        $record = $this->record;
        
        if ($record && 'active' === $record->status) {
            $record->testConnection();
>>>>>>> 712790c (.)
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
