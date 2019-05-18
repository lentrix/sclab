<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        if(!auth()->guest()) {
            return view('home');
        }else {
            return view('login');
        }
    }

    public function login(Request $request) {
        try {
            $this->validate($request, [
                'username'=>'required',
                'password'=>'required'
            ]);

            if(!auth()->attempt(request(['username', 'password']))) {
                return back()->withErrors([
                    'message' => 'Invalid user credentials!'
                ]);
            }

            return redirect('/');
        }catch(Exception $exp) {
            return redirect()->back()->withError($exp->getMessage());
        }

    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
