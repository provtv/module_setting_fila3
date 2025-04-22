<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class CreateDatabaseConnection extends CreateRecord
{
    protected static string $resource = DatabaseConnectionResource::class;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6d0eff2 (.)

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
=======
>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> b0c60891b (.)
=======
>>>>>>> 6d0eff2 (.)
}
