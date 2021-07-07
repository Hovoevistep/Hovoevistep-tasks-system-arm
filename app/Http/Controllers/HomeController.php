<?php

namespace App\Http\Controllers;

use App\Models\TrelloCredential;
use Illuminate\Http\Request;

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

}
