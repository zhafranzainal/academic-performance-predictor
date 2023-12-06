<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Occupation;
use Illuminate\Auth\Access\HandlesAuthorization;

class OccupationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the occupation can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the occupation can view the model.
     */
    public function view(User $user, Occupation $model): bool
    {
        return true;
    }

    /**
     * Determine whether the occupation can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the occupation can update the model.
     */
    public function update(User $user, Occupation $model): bool
    {
        return true;
    }

    /**
     * Determine whether the occupation can delete the model.
     */
    public function delete(User $user, Occupation $model): bool
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
     * Determine whether the occupation can restore the model.
     */
    public function restore(User $user, Occupation $model): bool
    {
        return false;
    }

    /**
     * Determine whether the occupation can permanently delete the model.
     */
    public function forceDelete(User $user, Occupation $model): bool
    {
        return false;
    }
}
