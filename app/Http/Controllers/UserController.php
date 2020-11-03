<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserPost;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserPost $request, User $user)
    {
        $validated = $request->validated();

        $user->update($request->all());
        return redirect()->route('user.show', $user)->with('success', '个人资料更新成功！');
    }
}
