<?php

namespace App\Http\Services;

use App\Models\User;

class UserService extends BasicAbstractService implements UserServiceInterface
{

    //Private vars
    private $repository;

    //Constructor
    public function __construct(User $repository)
    {
        parent::__construct($repository);
    }
}
