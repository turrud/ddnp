<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ProjectInterior;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectInteriorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the projectInterior can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list projectinteriors');
    }

    /**
     * Determine whether the projectInterior can view the model.
     */
    public function view(User $user, ProjectInterior $model): bool
    {
        return $user->hasPermissionTo('view projectinteriors');
    }

    /**
     * Determine whether the projectInterior can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create projectinteriors');
    }

    /**
     * Determine whether the projectInterior can update the model.
     */
    public function update(User $user, ProjectInterior $model): bool
    {
        return $user->hasPermissionTo('update projectinteriors');
    }

    /**
     * Determine whether the projectInterior can delete the model.
     */
    public function delete(User $user, ProjectInterior $model): bool
    {
        return $user->hasPermissionTo('delete projectinteriors');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete projectinteriors');
    }

    /**
     * Determine whether the projectInterior can restore the model.
     */
    public function restore(User $user, ProjectInterior $model): bool
    {
        return false;
    }

    /**
     * Determine whether the projectInterior can permanently delete the model.
     */
    public function forceDelete(User $user, ProjectInterior $model): bool
    {
        return false;
    }
}
