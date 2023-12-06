<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Nationality;
use Illuminate\Auth\Access\HandlesAuthorization;

class NationalityPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the nationality can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the nationality can view the model.
     */
    public function view(User $user, Nationality $model): bool
    {
        return true;
    }

    /**
     * Determine whether the nationality can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the nationality can update the model.
     */
    public function update(User $user, Nationality $model): bool
    {
        return true;
    }

    /**
     * Determine whether the nationality can delete the model.
     */
    public function delete(User $user, Nationality $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the nationality can restore the model.
     */
    public function restore(User $user, Nationality $model): bool
    {
        return false;
    }

    /**
     * Determine whether the nationality can permanently delete the model.
     */
    public function forceDelete(User $user, Nationality $model): bool
    {
        return false;
    }
}
