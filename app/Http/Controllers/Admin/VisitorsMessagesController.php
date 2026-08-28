<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\VisitorsMessagesStatus;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\VisitorMessage;
use Illuminate\Http\Request;

final class VisitorsMessagesController extends Controller
{
    public function all(Request $request)
    {
        $messages = VisitorMessage::all();
        defer(function () use ($messages) {
            $messages->each(function ($message) {
                if ($message->status == VisitorsMessagesStatus::New->value) {
                    $message->update(['status' => VisitorsMessagesStatus::Viewed->value]);
                }
            });
        });
        return view('admin.visitorsMessages.all', [
            'messages' => $messages,
        ]);
    }

    public function delete(Request $request, int $id)
    {
        if ($id === null) {
            return back()->with('error', 'id is not valid');
        }
        VisitorMessage::findOrFail($id)->delete();
        return back()->with('success', 'deleted');
    }
}
