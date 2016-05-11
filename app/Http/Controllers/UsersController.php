<?php

namespace SalesPoint\Http\Controllers;

use Illuminate\Http\Request;

use SalesPoint\Http\Requests;
use SalesPoint\Http\Requests\CreateUserRequest;
use SalesPoint\Http\Requests\UpdateUserRequest;
use SalesPoint\Http\Controllers\Controller;

use SalesPoint\Repositories\UserRepo;

class UsersController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepo->all();
        return view('admin.users.index', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $data = $request->all();
        $user = $this->userRepo->store($data);
        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepo->find($id);
        return view('admin.users.edit', compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->userRepo->find($id);
        $data = $request->all();
        $user = $this->userRepo->update($user, $data);
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = $this->userRepo->delete($id);

        $message = $user->firstname. ' was deleted.';

        if ($request->ajax()) {
            return response()->json([
                'id'      => $user->id,
                'message' => $message
            ]);
        }
        Session::flash('message', $message);
        return redirect('admin/users');
    }
}
