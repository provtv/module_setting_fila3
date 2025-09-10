<?php

declare(strict_types=1);

namespace Modules\Setting\Models\Policies;

use Modules\Setting\Models\Setting;
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 712790c (.)

class SettingPolicy extends SettingBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('setting.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('setting.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.view');
=======
    public function view(ProfileContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('setting.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('setting.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.update');
=======
    public function update(ProfileContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.delete');
=======
    public function delete(ProfileContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.restore');
=======
    public function restore(ProfileContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(UserContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
>>>>>>> 712790c (.)
