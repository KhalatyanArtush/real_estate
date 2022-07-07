<?php

namespace App\Services\Administrator\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Service
{
    public function store($data){
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],

        ]);
    }


    public function update($user, $data){
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);

    }
}
