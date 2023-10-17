<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * @var \App\Services\UserService
     */
    protected $service;

    /**
     * @param  \App\Services\UserService  $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index ()
    {
        return $this->service->index();
    }

    /**
     * @param  \App\Http\Requests\User\StoreRequest  $request
     *
     * @return mixed
     */
    public function store (StoreRequest $request)
    {
        $data = $request->validated();
        return $this->service->store($data);
    }

    /**
     * @param  \App\Models\User  $user
     *
     * @return \App\Models\User
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * @param  \App\Models\User  $user
     * @param  \App\Http\Requests\User\UpdateRequest  $request
     *
     * @return mixed
     */
    public function update(User $user, UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($user, $data);
        return response()->json(['message' => 'User updated'], 200);
    }

    /**
     * @param  \App\Models\User  $user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'User deleted'], 200);
    }
}
