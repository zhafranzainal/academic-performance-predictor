<?php

namespace App\Policies;

use App\Models\User;
use App\Models\HighestQualification;
use Illuminate\Auth\Access\HandlesAuthorization;

class HighestQualificationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the highestQualification can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the highestQualification can view the model.
     */
    public function view(User $user, HighestQualification $model): bool
    {
        return true;
    }

    /**
     * Determine whether the highestQualification can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the highestQualification can update the model.
     */
    public function update(User $user, HighestQualification $model): bool
    {
        return true;
    }

    /**
     * Determine whether the highestQualification can delete the model.
     */
    public function delete(User $user, HighestQualification $model): bool
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
     * Determine whether the highestQualification can restore the model.
     */
    public function restore(User $user, HighestQualification $model): bool
    {
        return false;
    }

    /**
     * Determine whether the highestQualification can permanently delete the model.
     */
    public function forceDelete(User $user, HighestQualification $model): bool
    {
        return false;
    }
}
