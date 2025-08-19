<?php

declare(strict_types=1);

namespace Modules\Setting\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    protected string $moduleNamespace = 'Modules\Setting\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
<<<<<<< HEAD

=======
>>>>>>> a3c0b85 (.)
    public string $name = 'Setting';
}
