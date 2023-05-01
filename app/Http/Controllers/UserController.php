<?php

namespace App\Http\Controllers;

use App\Http\Services\UserServiceInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //Constructor
    public function __construct(private UserServiceInterface $userService)
    {
    }

    //Views
    //Index
    public function index()
    {
        //Component breadcrumb
        $title = 'Listagem de Usuarios';
        $items = [
            ['name' => ' Home', 'url' => route('home'), 'icon' => 'fa fa-home fa-lg'],
            ['name' => ' Usuarios', 'url' => route('user.index'), 'icon' => 'fa fa-university fa-lg'],
            ['name' => ' Listagem', 'url' => route('user.index'), 'icon' => 'fa fa-list fa-lg'],
        ];

        //List all schools
        $users = $this->userService->list();


        //Component Modal
        $modalOptions = [
            'title' => 'Excluir Usuario',
            'action' => 'user.delete',
            'content' => 'Tem certeza que deseja excluir a escola?',
        ];


        //Return view
        return view('pages.user.index', [
            'title' => $title,
            'items' => $items,
            'users' => $users,
            'modalOptions' => $modalOptions ?? null,
        ]);
    }

    //Create
    public function create()
    {
        return view('pages.user.include');
    }

    //Edit/Update
    public function edit($id)
    {
        //Component Modal
        $modalOptions = [
            'title' => 'Editar Usuario',
            'action' => 'user.update',
            'content' => 'Tem certeza que deseja editar a escola?',
        ];

        $user = $this->userService->show($id);
        return view('pages.user.update', [
            'user' => $user,
            'modalOptions' => $modalOptions,
        ]);
    }

    //Public methods (CRUD) calls to service
    //Store/Create
    public function store(Request $request)
    {
        $data = $this->userService->store($request);

        return redirect()->route('user.index')->with($data['success'], $data['message']);
    }

    //Update
    public function update(Request $request, $id)
    {
        $data = $this->userService->update($request, $id);

        return redirect()->route('user.index')->with($data['success'], $data['message']);
    }

    //Delete
    public function delete($id)
    {
        // dd($id);
        $data = $this->userService->delete($id);
        return redirect()->route('user.index')->with($data['success'], $data['message']);
    }
}
