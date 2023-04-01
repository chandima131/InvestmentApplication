<?php

namespace App\Http\Controllers\RelationshipManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\InvestmantIdeas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('relationshipmanager.dashboard');
    }

    public function clients()
    {

        $clients = DB::table('clients')
             ->select('clients.*')
            ->get();

        return  view('relationshipmanager.dashboard')->with('clients', $clients);
    }

    public function edit($id)
    {
        $clients = Clients::find($id);
        $investmantideas = InvestmantIdeas::all();

        return view('relationshipmanager.edit')->with('clients', $clients)->with('investmantideas', $investmantideas);
    }

    public function update(Request $request, $id)
    {
        // $clients = Clients::where('client_id', $id)->first();
        // $clients->investment_suggestion = ;
        $assign=DB::table('assign')->insert([
            "client_id"=> $id,
            "investmant_idea_id"=>$request->id
        ]
        );
        return redirect('relationshipmanager/dashboard');
    }
    public function Register_update(Request $request, $id)
    {
        $input =$request->all();
        $input->client_id= Auth::user()->id;
        $blog =  Clients::create($input);
        return response()->json($blog, 200);    }
}
