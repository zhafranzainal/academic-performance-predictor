<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Father;
use Illuminate\Auth\Access\HandlesAuthorization;

class FatherPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the father can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the father can view the model.
     */
    public function view(User $user, Father $model): bool
    {
        return true;
    }

    /**
     * Determine whether the father can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the father can update the model.
     */
    public function update(User $user, Father $model): bool
    {
        return true;
    }

    /**
     * Determine whether the father can delete the model.
     */
    public function delete(User $user, Father $model): bool
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
     * Determine whether the father can restore the model.
     */
    public function restore(User $user, Father $model): bool
    {
        return false;
    }

    /**
     * Determine whether the father can permanently delete the model.
     */
    public function forceDelete(User $user, Father $model): bool
    {
        return false;
    }
}
