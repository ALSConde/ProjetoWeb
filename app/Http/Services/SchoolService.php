<?php

namespace App\Http\Services;

use App\Models\School;

class SchoolService
{

    //Private vars
    private $repository;

    //Constructor
    public function __construct(School $repository)
    {
        $this->repository = $repository;
    }

    //Public methods
    //Store/Create
    public function store($request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return (['success' => 'true', 'message' => 'School created successfully!']);
    }

    //Read one data
    public function show($id)
    {
        $data = $this->repository->find($id);

        if (!$data) {
            return (['success' => 'false', 'message' => 'School not found!']);
        }

        return $data;
    }

    //Read all data
    public function list()
    {
        $data = $this->repository->all();

        if (!$data) {
            return (['success' => 'false', 'message' => 'School not found!']);
        }

        return $data;
    }

    //Update
    public function update($request, $id)
    {
        $data = $this->repository->find($id);

        if (!$data) {
            return (['success' => 'false', 'message' => 'School not found!']);
        }

        $data->update($request->all());

        return (['success' => 'true', 'message' => 'School updated successfully!']);
    }

    //Delete
    public function delete($id)
    {
        $data = $this->repository->find($id);

        if (!$data) {
            return (['success' => 'false', 'message' => 'School not found!']);
        }

        $data->delete();

        return (['success' => 'true', 'message' => 'School deleted successfully!']);
    }
}
