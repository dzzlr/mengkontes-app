<?php

namespace App\Policies;

use App\Models\Competition;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompetitionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function view(User $user, Competition $competition)
    {
        return $user->id == $competition->user_id;
    }

    public function update(User $user, Competition $competition)
    {
        return $user->id == $competition->user_id;
    }
}
