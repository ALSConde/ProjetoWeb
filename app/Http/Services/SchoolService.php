<?php

namespace App\Http\Services;

use App\Models\School;

class SchoolService extends BasicAbstractService implements SchoolServiceInterface
{

    //Private vars
    private $repository;

    //Constructor
    public function __construct(School $repository)
    {
        // $this->repository = $repository;
        parent::__construct($repository);
    }
}
