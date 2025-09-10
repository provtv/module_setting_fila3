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
<<<<<<< HEAD
        $connection = $this->record;

        if ('active' === $connection->status) {
=======
        /** @var \Modules\Setting\Models\DatabaseConnection|null $connection */
        $connection = $this->record;
        
        if ($connection && 'active' === $connection->status) {
>>>>>>> 712790c (.)
            $connection->testConnection();
        }
    }
}
