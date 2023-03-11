<?php

namespace App\Http\Controllers\RelationshipManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        return view ('relationshipmanager.dashboard');
    }
}
