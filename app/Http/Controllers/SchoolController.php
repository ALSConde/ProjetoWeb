<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolRequest;
use App\Http\Services\BasicServiceInterface;

class SchoolController extends Controller
{
    //Private vars
    private $schoolService;

    //Constructor
    public function __construct(BasicServiceInterface $schoolService)
    {
        $this->schoolService = $schoolService;
    }

    //Views
    //Index
    public function index()
    {
        //Component breadcrumb
        $title = 'Listagem de Escolas';
        $items = [
            ['name' => ' Home', 'url' => route('school.index'), 'icon' => 'fa fa-home fa-lg'],
            ['name' => ' Escolas', 'url' => route('school.index'), 'icon' => 'fa fa-university fa-lg'],
            ['name' => ' Listagem', 'url' => route('school.index'), 'icon' => 'fa fa-list fa-lg'],
        ];

        //List all schools
        $schools = $this->schoolService->list();

        //Return view
        return view('pages.school.index', [
            'title' => $title,
            'items' => $items,
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
    public function delete($id)
    {
        $data = $this->schoolService->delete($id);
        return redirect()->route('school.index')->with($data['success'], $data['message']);
    }
}
