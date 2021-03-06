<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\User\Http\Requests\UserRequest;
use App\Services\PaperService;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    protected $service;

    /**
     * @var PaperService
     */
    protected $paperService;

    /**
     * UserController constructor.
     *
     * @param UserService $service
     * @param PaperService $paperService
     */
    public function __construct(UserService $service, PaperService $paperService)
    {
        $this->service = $service;
        $this->paperService = $paperService;
    }

    /**
     * Method to show Users List
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (!$request->get('orderByAsc')) {
            $request->merge(['orderByAsc' => 'nome']);
        }

        $user = true;
        $users = $this->service->get('*', $request, 'object');

        return view('admin::user.index', compact('user', 'users'));
    }

    /**
     * Method to show User Create Form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $user = true;

        return view('admin::user.create', compact('user'));
    }

    /**
     * Method to Create User
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $condition = $this->service->create($request->all());
        if ($condition['status'] === '00') {
            return redirect()->back()->with('success', 'Usuário criado com sucesso.');
        }
        return redirect()->back()->withErrors(['message' => $condition['message'], 'type' => 'danger'])->withInput($request->all());
    }

    /**
     * Method to show User Information
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $user = true;
        $client = $this->service->find($id);

        return view('admin::user.show', compact('user', 'client'));
    }

    /**
     * Method to edit User Information
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = true;
        $client = $this->service->find($id);
        $papers = $this->paperService->all();

        return view('admin::user.edit', compact('user', 'client', 'papers'));
    }

    /**
     * Method to update User Information
     *
     * @param UserRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, $id)
    {
        $condition = $this->service->update($request->all(), $id);
        if ($condition['status'] === '00') {
            return redirect()->back()->with('success', 'Alterações realizadas com sucesso.');
        }
        return redirect()->back()->withErrors(['message' => $condition['message'], 'type' => 'danger'])->withInput($request->all());
    }
}