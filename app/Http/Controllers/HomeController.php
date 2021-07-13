<?php

namespace App\Http\Controllers;

use App\Models\TrelloCredential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Unirest;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $trello_cred = TrelloCredential::all();

        return view('home', compact('trello_cred'));
    }

    public function home(Request $request)
    {
        return view('auth.login');
    }

}
