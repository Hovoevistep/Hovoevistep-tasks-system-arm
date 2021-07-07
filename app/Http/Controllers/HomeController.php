<?php

namespace App\Http\Controllers;

use App\Models\TrelloCredential;
use Illuminate\Http\Request;
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

        // $_POST( 'https://api.trello.com/1/tokens/' . $token . '/webhooks/?key='. $key, {
        //     callbackURL: 'http://127.0.0.1:8000/',
        //     idModel: '60d97e978948481728008517',
        //   });


        $token = 'a71180e688e3be6b1ba8c7c7714b8f8baa9a55ba1e01baebc76c4251d1697d14';
        $key = '765ea670a0fe9f0bb0fd7865732849bb';
        $callbackURL = 'https://tasks-system-am.herokuapp.com/';
        $idModel = '60d97e978948481728008517';
        $responseWeb =  Unirest\Request::post('https://api.trello.com/1/tokens/' . $token . '/webhooks/?key=' . $key . '&idModel='. $idModel .'&callbackURL=' . $callbackURL);

        dd($request->all());

        return view('auth.login');
    }

}
