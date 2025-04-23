<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class CreateDatabaseConnection extends CreateRecord
{
    protected static string $resource = DatabaseConnectionResource::class;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 32e0311 (🔄 Aggiornamento subtree)

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterCreate(): void
    {
        $connection = $this->record;

        if ($connection !== null && 'active' === $connection->status) {
            $connection->testConnection();
        }
    }
<<<<<<< HEAD
=======
=======
>>>>>>> origin/dev
=======
>>>>>>> b0c60891b (.)
>>>>>>> 32e0311 (🔄 Aggiornamento subtree)
}
