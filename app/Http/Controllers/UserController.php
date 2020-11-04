<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserPost;
use App\Models\User;
use App\Handlers\ImageUploadHandler;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);

        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserPost $request, User $user, ImageUploadHandler $uploader)
    {
        $this->authorize('update', $user);

        $data = $request->validated();

        $result = $uploader->save($request->avatar, 'avatars', $user->id, 416);

        if ($result) {
            $data['avatar'] = $result['path'];
        }

        $user->update($data);
        return redirect()->route('user.show', $user)->with('success', '个人资料更新成功！');
    }
}
