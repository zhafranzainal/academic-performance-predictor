<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Student;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the student can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the student can view the model.
     */
    public function view(User $user, Student $model): bool
    {
        return true;
    }

    /**
     * Determine whether the student can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the student can update the model.
     */
    public function update(User $user, Student $model): bool
    {
        return true;
    }

    /**
     * Determine whether the student can delete the model.
     */
    public function delete(User $user, Student $model): bool
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
     * Determine whether the student can restore the model.
     */
    public function restore(User $user, Student $model): bool
    {
        return false;
    }

    /**
     * Determine whether the student can permanently delete the model.
     */
    public function forceDelete(User $user, Student $model): bool
    {
        return false;
    }
}
