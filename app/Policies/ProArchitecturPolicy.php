<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ProArchitectur;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProArchitecturPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the proArchitectur can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list proarchitecturs');
    }

    /**
     * Determine whether the proArchitectur can view the model.
     */
    public function view(User $user, ProArchitectur $model): bool
    {
        return $user->hasPermissionTo('view proarchitecturs');
    }

    /**
     * Determine whether the proArchitectur can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create proarchitecturs');
    }

    /**
     * Determine whether the proArchitectur can update the model.
     */
    public function update(User $user, ProArchitectur $model): bool
    {
        return $user->hasPermissionTo('update proarchitecturs');
    }

    /**
     * Determine whether the proArchitectur can delete the model.
     */
    public function delete(User $user, ProArchitectur $model): bool
    {
        return $user->hasPermissionTo('delete proarchitecturs');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete proarchitecturs');
    }

    /**
     * Determine whether the proArchitectur can restore the model.
     */
    public function restore(User $user, ProArchitectur $model): bool
    {
        return false;
    }

    /**
     * Determine whether the proArchitectur can permanently delete the model.
     */
    public function forceDelete(User $user, ProArchitectur $model): bool
    {
        return false;
    }
}
