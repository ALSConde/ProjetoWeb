<?php

namespace App\Http\Services;

interface BasicServiceInterface
{
    public function store($request);
    public function show($id);
    public function list();
    public function update($request, $id);
    public function delete($id);
}
