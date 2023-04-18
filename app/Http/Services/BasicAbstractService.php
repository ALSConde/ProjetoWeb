<?php

namespace App\Http\Services;

abstract class BasicAbstractService implements BasicServiceInterface
{

    //Private vars
    private $repository;

    //Constructor
    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function store($request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return (['success' => 'true', 'message' => 'Created successfully!']);
    }

    public function show($id)
    {
        $data = $this->repository->find($id);

        if (!$data) {
            return (['success' => 'false', 'message' => 'Not found!']);
        }

        return $data;
    }

    public function list()
    {
        $data = $this->repository->all();

        if (!$data) {
            return (['success' => 'false', 'message' => 'Not found!']);
        }

        return $data;
    }

    public function update($request, $id)
    {
        $data = $this->repository->find($id);

        if (!$data) {
            return (['success' => 'false', 'message' => 'Not found!']);
        }

        $data->update($request->all());

        return (['success' => 'true', 'message' => 'Updated successfully!']);
    }

    public function delete($id)
    {
        $data = $this->repository->find($id);

        if (!$data) {
            return (['success' => 'false', 'message' => 'Not found!']);
        }

        $data->delete();

        return (['success' => 'true', 'message' => 'Deleted successfully!']);
    }
}
