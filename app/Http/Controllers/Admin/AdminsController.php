<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

final class AdminsController extends Controller
{
    public function all(Request $request)
    {
        return view('admin.admins.all', [
            'admins' => User::all(),
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', ],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return back()->with('success', 'created');
    }

    public function update(Request $request, int $id)
    {
        return back()->with('success', 'updated');
    }

    public function delete(Request $request, int $id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', 'deleted');
    }
}
