<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolRequest;
use App\Http\Services\SchoolService;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //Private vars
    private $schoolService;

    //Constructor
    public function __construct(SchoolService $schoolService)
    {
        $this->schoolService = $schoolService;
    }


    //Views
    //Index
    public function index()
    {

        $schools = $this->schoolService->list();

        return view('pages.school.index', [
            'schools' => $schools,
        ]);
    }

    //Create
    public function create()
    {
        return view('pages.school.include');
    }

    //Edit/Update
    public function edit($id)
    {
        $school = $this->schoolService->show($id);
        return view('pages.school.update', compact('school'));
    }

    //Read one data
    public function show($id)
    {
        $school = $this->schoolService->show($id);
        return view('school.show', compact('school'));
    }

    //Read all data
    public function list()
    {
        $schools = $this->schoolService->list();
        return view('school.list', compact('schools'));
    }

    //Delete data view
    public function exclude($id)
    {
        $school = $this->schoolService->show($id);

        return view('pages.school.exclude', compact('school'));
    }

    //Public methods (CRUD) calls to service
    //Store/Create
    public function store(SchoolRequest $request)
    {
        $data = $this->schoolService->store($request);

        return redirect()->route('school.index')->with($data['success'], $data['message']);
    }

    //Update
    public function update(SchoolRequest $request, $id)
    {
        $data = $this->schoolService->update($request, $id);

        return redirect()->route('school.index')->with($data['success'], $data['message']);
    }

    //Delete
    public function destroy($id)
    {
        $data = $this->schoolService->delete($id);
        return redirect()->route('school.index')->with($data['success'], $data['message']);
    }
}
