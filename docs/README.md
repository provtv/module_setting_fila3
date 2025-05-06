# Modulo Setting

> **Collegamenti correlati**
> - [README.md documentazione generale](../../../docs/README.md)
> - [README.md modulo User](../User/docs/README.md)
> - [README.md modulo Notify](../Notify/docs/README.md)
> - [README.md modulo Media](../Media/docs/README.md)
> - [README.md modulo Tenant](../Tenant/docs/README.md)
> - [README.md modulo Xot](../Xot/docs/README.md)
> - [Collegamenti documentazione centrale](../../../docs/collegamenti-documentazione.md)

---

## Introduzione e Motivazione Architetturale
Il modulo **Setting** fornisce una gestione centralizzata e modulare delle configurazioni di sistema, delle connessioni database e delle preferenze utente. È progettato per garantire scalabilità, riusabilità e coerenza con le best practice architetturali del progetto Laraxot. L'integrazione con Filament consente una UI moderna e facilmente estendibile.

Per dettagli sulle scelte architetturali, vedi anche la [documentazione globale](../../../docs/README.md) e la sezione [Architettura](./architecture.md) di questo modulo.

---

## Indice
- [Struttura del Modulo](#struttura-del-modulo)
- [Documentazione Core](#documentazione-core)
- [Filament & UI](#filament-e-ui)
- [Best Practices e Convenzioni](#best-practices-e-convenzioni)
- [Testing e Qualità](#testing-e-qualità)
- [Roadmap & Sviluppo](#roadmap-e-sviluppo)
- [Note Importanti](#note-importanti)
- [Esempi d'Uso](#esempi-duso)
- [Vedi Anche](#vedi-anche)

---

## Struttura del Modulo

```
Modules/Setting/
├── app/
│   ├── Actions/
│   ├── Filament/
│   │   ├── Resources/
│   │   │   └── DatabaseConnectionResource/
│   │   │       └── Pages/
│   ├── Models/
│   ├── Providers/
│   └── ...
├── config/
│   └── setting.php
├── database/
│   ├── migrations/
│   └── seeders/
├── docs/
│   ├── architecture.md
│   ├── conflicts.md
│   ├── roadmap.md
│   └── ...
├── lang/
│   └── it/
├── routes/
│   └── web.php
└── tests/
```

---

## Documentazione Core
- [Struttura del Modulo](./structure.md)
- [Gestione Connessioni Database](./database_connections.md)
- [Impostazioni Sistema](./system_settings.md)
- [Preferenze Utente](./user_preferences.md)
- [Providers e Traits](./providers_traits.md)
- [Traduzioni](./translations.md)

## Filament e UI
- [Best Practices Filament](./filament_best_practices.md)
- [Risorse Filament](./database_connection_resource.md)
- [Interfaccia Impostazioni](./setting_interface.md)

## Best Practices e Convenzioni
- [Best Practices](./best_practices.md)
- [Security](./security.md)
- [PHPStan Fixes](./phpstan/phpstan-fixes.md)
- [Conflitti e Risoluzioni](./conflicts.md)

## Testing e Qualità
- [Testing](./testing.md)
- [Analisi Performance](./bottlenecks.md)

## Roadmap e Sviluppo
- [Roadmap](./roadmap.md)
- [Analisi Architetturale](./architecture.md)

---

## Note Importanti

### Gestione Configurazioni
- Utilizzare sempre il sistema di configurazione Laravel (`config/setting.php`)
- Mantenere le configurazioni modulari e ben documentate
- Aggiornare la documentazione ogni volta che si aggiunge una nuova opzione

### Service Provider
- I trait dei provider vanno in `Providers/Traits/`
- Seguire la struttura esistente per nuovi trait e provider
- Documentare sempre l'uso e la logica dei trait

### Traduzioni
- Utilizzare sempre il `LangServiceProvider` per la registrazione delle traduzioni
- Non usare direttamente `->label()` nelle risorse Filament: seguire la struttura `'source' => ['label'=>'Sorgente']`
- Aggiornare la documentazione ogni volta che si aggiungono nuove chiavi di traduzione

---

## Esempi d'Uso

### Esempio: Registrazione di una nuova connessione database
```php
use Modules\Setting\Models\DatabaseConnection;

$connection = DatabaseConnection::create([
    'name' => 'secondario',
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'altro_db',
    'username' => 'user',
    'password' => 'secret',
]);
```

### Esempio: Recupero impostazioni
```php
$setting = config('setting.some_option');
```

---

## Vedi Anche
- [README.md documentazione generale](../../../docs/README.md)
- [README.md modulo User](../User/docs/README.md)
- [README.md modulo Notify](../Notify/docs/README.md)
- [README.md modulo Media](../Media/docs/README.md)
- [README.md modulo Tenant](../Tenant/docs/README.md)
- [README.md modulo Xot](../Xot/docs/README.md)
- [Collegamenti documentazione centrale](../../../docs/collegamenti-documentazione.md)

---

> _Segui sempre le regole di aggiornamento e manutenzione della documentazione come da [standard globali](../../../docs/README.md) e [processo di review](./conflicts.md)._use Xot\XotBaseServiceProvider;

class SettingServiceProvider extends XotBaseServiceProvider
{
    // Implementazione
}
```

### Database Connection Resource
```php
use Xot\Filament\Resources\XotBaseResource;

class DatabaseConnectionResource extends XotBaseResource
{
    // Implementazione
}
```

## Dipendenze
- Laravel Framework
- Filament
- Livewire
- Volt
- Folio

## Utilizzo
Il modulo Setting fornisce funzionalità di configurazione attraverso:
- Gestione connessioni database
- Impostazioni di sistema
- Preferenze utente
- Interfaccia Filament

## Panoramica
Il modulo Setting è responsabile della gestione delle configurazioni dell'applicazione. È strettamente integrato con altri moduli come Xot, User, e Lang.

## Struttura del Modulo

```
Modules/Setting/
├── app/
│   ├── Models/
│   │   ├── Setting.php
│   │   └── DatabaseConnection.php
│   ├── Providers/
│   │   ├── Traits/
│   │   │   └── HasSettingConfiguration.php
│   │   ├── SettingServiceProvider.php
│   │   └── Filament/
│   │       └── AdminPanelProvider.php
│   ├── Filament/
│   │   ├── Resources/
│   │   │   ├── SettingResource.php
│   │   │   └── DatabaseConnectionResource.php
│   │   ├── Widgets/
│   │   │   └── Setting/
│   │   │       ├── SystemStatusWidget.php
│   │   │       └── DatabaseStatusWidget.php
│   │   └── Pages/
│   │       └── Settings/
│   │           ├── GeneralSettings.php
│   │           └── DatabaseSettings.php
│   └── Http/
│       └── Controllers/
│           └── Setting/
├── config/
│   └── setting.php
├── database/
│   └── migrations/
└── resources/
    └── views/
        └── pages/
            └── settings/
```

## Collegamenti Principali

### Documentazione Core
- [Architettura del Modulo](./architecture.md)
- [Configurazione Database](./database_connections.md)
- [Impostazioni Sistema](./system_settings.md)
- [Best Practices Filament](./filament_best_practices.md)
- [Roadmap](./roadmap.md)
- [Bottlenecks](./bottlenecks.md)

### Integrazioni
- [Integrazione con Xot](../Xot/docs/README.md)
- [Integrazione con User](../User/docs/README.md)
- [Integrazione con Lang](../Lang/docs/README.md)

### Configurazioni
- [Gestione Database](./database_connections.md)
- [Impostazioni Sistema](./system_settings.md)
- [Preferenze Utente](./user_preferences.md)

## Vedi Anche

- [Modulo Xot](../Xot/docs/README.md) - Modulo base e linee guida generali
- [Modulo User](../User/docs/README.md) - Gestione utenti
- [Modulo Lang](../Lang/docs/README.md) - Gestione traduzioni
- [Convenzioni di Naming](../../../docs/standards/file_naming_conventions.md) - Standard per la nomenclatura dei file
