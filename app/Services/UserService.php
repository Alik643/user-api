<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserService
{

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index(): Collection
    {
        return User::all();
    }

    /**
     * @param $data
     *
     * @return mixed
     */
    public function store($data)
    {
        return User::create($data);
    }

    /**
     * @param $user
     * @param $data
     *
     * @return mixed
     */
    public function update($user, $data)
    {
        return $user->update($data);
    }

}