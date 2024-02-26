<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Method;
use Illuminate\Auth\Access\HandlesAuthorization;

class MethodPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the method can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list methods');
    }

    /**
     * Determine whether the method can view the model.
     */
    public function view(User $user, Method $model): bool
    {
        return $user->hasPermissionTo('view methods');
    }

    /**
     * Determine whether the method can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create methods');
    }

    /**
     * Determine whether the method can update the model.
     */
    public function update(User $user, Method $model): bool
    {
        return $user->hasPermissionTo('update methods');
    }

    /**
     * Determine whether the method can delete the model.
     */
    public function delete(User $user, Method $model): bool
    {
        return $user->hasPermissionTo('delete methods');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete methods');
    }

    /**
     * Determine whether the method can restore the model.
     */
    public function restore(User $user, Method $model): bool
    {
        return false;
    }

    /**
     * Determine whether the method can permanently delete the model.
     */
    public function forceDelete(User $user, Method $model): bool
    {
        return false;
    }
}
