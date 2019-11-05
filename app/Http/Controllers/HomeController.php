<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lessons = Lesson::all()->reverse();
        return view('index', compact('lessons'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function admin()
    {
        return view('admin.create');
    }

    public function lesson($id)
    {
        $lesson = Lesson::find($id);
        return view('lesson', ['lesson' => $lesson]);
    }

    public function store()
    {
        $lesson = new Lesson();
        $lesson->name = request('name');
        $lesson->description = request('description');
        $lesson->category = request('category');
        $lesson->link = request('link');
        $lesson->save();

        return back();
    }
}
