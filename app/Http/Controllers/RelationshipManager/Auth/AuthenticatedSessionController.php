<?php

namespace App\Http\Controllers\RelationshipManager\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RelationshipManagerLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Clients;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('relationshipmanager.auth.login');
    }

    // /**
    //  * Handle an incoming authentication request.
    //  *
    //  * @param  \App\Http\Requests\Auth\LoginRequest  $request
    //  * @return \Illuminate\Http\RedirectResponse
    //  */
    public function store(RelationshipManagerLoginRequest $request)
    {
        // dd($request->all());
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::RM_HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('relationshipmanager')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
        public function Register_update(Request $request, $id)
    {
        $input =$request->all();
         $blog =  Clients::create($input);
         return redirect()->intended(RouteServiceProvider::HOME);
        }

}
