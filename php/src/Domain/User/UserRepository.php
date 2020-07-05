<?php

namespace App\Domain\User;

/**
 * Interface UserRepository
 *
 * @package App\Domain\User
 */
interface UserRepository
{
    /**
     * @param  User $user
     * @return mixed
     */
    public function create(User $user);
}
