<?php

declare(strict_types=1);

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\VisitorMessage;
use Illuminate\Http\Request;

final class HomeController extends Controller
{
    public function home()
    {
        return view('website.index');
    }

    public function courses()
    {
        return view('website.courses');
    }

    public function elements()
    {
        return view('website.elements');
    }

    public function news()
    {
        return view('website.news');
    }

    public function about()
    {
        return view('website.about');
    }

    public function newsPost()
    {
        return view('website.newsPost');
    }

    public function teachers()
    {
        return view('website.teachers');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function visitorMessage(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'unique:visitor_messages,email'],
            'message' => ['required', 'string', 'max:1000']
        ]);
        $message = VisitorMessage::create($data);
        return back()->with('success', 'message sent');
    }
}
