<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\User;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::WhereNot('id', 1)->count();
        $materi = Materi::count();

        return view('admin.dashboard', [
            'user' => $user,
            'materi' => $materi,
            'title' => 'Dashboard || Admin STARS'
        ]);
    }
}
