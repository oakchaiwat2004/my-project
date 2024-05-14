<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{

    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */

    public function view($roles_code, User $user)
    {
        return $user->role->roles_code === $roles_code;
    }


    public function __construct()
    {
        //
    }
}
