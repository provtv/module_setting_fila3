<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class CreateDatabaseConnection extends CreateRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterCreate(): void
    {
        $connection = $this->record;

<<<<<<< HEAD
<<<<<<< HEAD
        if ('active' === $connection->status) {
=======
        if ($connection->status === 'active') {
>>>>>>> 5016f6f (.)
=======
        if ('active' === $connection->status) {
>>>>>>> 83590b7 (.)
            $connection->testConnection();
        }
    }
}
