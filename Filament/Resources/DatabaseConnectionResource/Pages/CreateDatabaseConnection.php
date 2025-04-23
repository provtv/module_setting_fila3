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
}
