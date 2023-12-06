<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Mother;
use Illuminate\Auth\Access\HandlesAuthorization;

class MotherPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the mother can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the mother can view the model.
     */
    public function view(User $user, Mother $model): bool
    {
        return true;
    }

    /**
     * Determine whether the mother can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the mother can update the model.
     */
    public function update(User $user, Mother $model): bool
    {
        return true;
    }

    /**
     * Determine whether the mother can delete the model.
     */
    public function delete(User $user, Mother $model): bool
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
     * Determine whether the mother can restore the model.
     */
    public function restore(User $user, Mother $model): bool
    {
        return false;
    }

    /**
     * Determine whether the mother can permanently delete the model.
     */
    public function forceDelete(User $user, Mother $model): bool
    {
        return false;
    }
}
