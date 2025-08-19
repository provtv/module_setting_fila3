<<<<<<< HEAD
# Jigsaw Docs Starter Template

This is a starter template for creating a beautiful, customizable documentation site for your project with minimal effort. You’ll only have to change a few settings and you’re ready to go.

[View a preview of the docs template.](http://jigsaw-docs-template.tighten.co/)

## Installation

After installing Jigsaw, run the following command from your project directory:

```bash
./vendor/bin/jigsaw init docs
```

This starter template includes samples of common page types, and comes pre-configured with:

- A fully responsive navigation bar
- A sidebar navigation menu
- [Tailwind CSS](https://tailwindcss.com/), a utility CSS framework that allows you to customize your design without touching a line of CSS
- [Purgecss](https://www.purgecss.com/) to remove unused selectors from your CSS, resulting in smaller CSS files
- Syntax highlighting using [highlight.js](https://highlightjs.org/)
- A script that automatically generates a `sitemap.xml` file
- A search bar powered by [Algolia DocSearch](https://community.algolia.com/docsearch/), and instructions on how to get started with their free indexing service
- A custom 404 page

---

![Docs starter template screenshot](https://user-images.githubusercontent.com/357312/50345478-40170c00-04fd-11e9-856c-ad46d1ac45cb.png)

---

### Configuring your new site

As with all Jigsaw sites, configuration settings can be found in `config.php`; you can update the variables in that file with settings specific to your project. You can also add new configuration variables there to use across your site; take a look at the [Jigsaw documentation](http://jigsaw.tighten.co/docs/site-variables/) to learn more.

```php
// config.php
return [
    'baseUrl' => 'https://my-awesome-jigsaw-site.com/',
    'production' => false,
    'siteName' => 'My Site',
    'siteDescription' => 'Give your documentation a boost with Jigsaw.',
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
    'navigation' => require_once('navigation.php'),
];
```

> Tip: This configuration file is also where you’ll define any "collections" (for example, a collection of the contributors to your site, or a collection of blog posts). Check out the official [Jigsaw documentation](https://jigsaw.tighten.co/docs/collections/) to learn more.

---

### Adding Content

You can write your content using a [variety of file types](http://jigsaw.tighten.co/docs/content-other-file-types/). By default, this starter template expects your content to be located in the `source/docs` folder. If you change this, be sure to update the URL references in `navigation.php`.

The first section of each content page contains a YAML header that specifies how it should be rendered. The `title` attribute is used to dynamically generate HTML `title` and OpenGraph tags for each page. The `extends` attribute defines which parent Blade layout this content file will render with (e.g. `_layouts.documentation` will render with `source/_layouts/documentation.blade.php`), and the `section` attribute defines the Blade "section" that expects this content to be placed into it.

```yaml
---
title: Navigation
description: Building a navigation menu for your site
extends: _layouts.documentation
section: content
---
```

[Read more about Jigsaw layouts.](https://jigsaw.tighten.co/docs/content-blade/)

---

### Adding Assets

Any assets that need to be compiled (such as JavaScript, Less, or Sass files) can be added to the `source/_assets/` directory, and Laravel Mix will process them when running `npm run dev` or `npm run prod`. The processed assets will be stored in `/source/assets/build/` (note there is no underscore on this second `assets` directory).

Then, when Jigsaw builds your site, the entire `/source/assets/` directory containing your built files (and any other directories containing static assets, such as images or fonts, that you choose to store there) will be copied to the destination build folders (`build_local`, on your local machine).

Files that don't require processing (such as images and fonts) can be added directly to `/source/assets/`.

[Read more about compiling assets in Jigsaw using Laravel Mix.](http://jigsaw.tighten.co/docs/compiling-assets/)

---

## Building Your Site

Now that you’ve edited your configuration variables and know how to customize your styles and content, let’s build the site.

```bash
# build static files with Jigsaw
./vendor/bin/jigsaw build

# compile assets with Laravel Mix
# options: dev, prod
npm run dev
```
=======
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
>>>>>>> a3c0b85 (.)
