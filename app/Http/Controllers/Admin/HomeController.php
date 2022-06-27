<?php

namespace App\Http\Controllers\Admin; // Modificato issue 14

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Modificato issue 14

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
        return view('admin.home'); // Modificato issue 14
    }
}
