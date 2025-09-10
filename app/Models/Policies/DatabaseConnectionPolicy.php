<?php

declare(strict_types=1);

namespace Modules\Setting\Models\Policies;

use Modules\Setting\Models\DatabaseConnection;
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 712790c (.)

class DatabaseConnectionPolicy extends SettingBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('database_connection.viewAny');
=======
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('database_connection.viewAny'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(UserContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.view');
=======
    public function view(ProfileContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.view'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('database_connection.create');
=======
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('database_connection.create'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(UserContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.update');
=======
    public function update(ProfileContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.update'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(UserContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.delete');
=======
    public function delete(ProfileContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.delete'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(UserContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.restore');
=======
    public function restore(ProfileContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.restore'); /** @phpstan-ignore method.nonObject */
>>>>>>> 712790c (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(UserContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.forceDelete');
    }
}
=======
    public function forceDelete(ProfileContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
>>>>>>> 712790c (.)
