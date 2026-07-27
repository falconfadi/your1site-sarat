<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

final class SettingController extends Controller
{
    public function all(Request $request)
    {
        return view('admin.settings.all', [
            'settings' => Setting::all(),
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'unique:settings,name'],
            'value' => ['required', 'string', 'max:150'],
        ]);
        Setting::create($data);
        return back()->with('success', 'created');
    }

    public function edit(Request $request, int $id)
    {
        return back()->with('success', 'edit page');
    }

    public function update(Request $request, int $id)
    {
        return back()->with('success', 'updated');
    }

    public function delete(Request $request, int $id)
    {
        Setting::findOrFail($id)->delete();
        return back()->with('success', 'deleted');
    }
}
