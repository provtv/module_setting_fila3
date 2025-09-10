<?php

declare(strict_types=1);

namespace Modules\Setting\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 712790c (.)
use Modules\Xot\Datas\XotData;

abstract class SettingBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
=======
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
>>>>>>> 712790c (.)
            return true;
        }

        return null;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 712790c (.)
