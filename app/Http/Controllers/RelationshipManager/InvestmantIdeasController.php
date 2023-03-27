<?php

namespace App\Http\Controllers\RelationshipManager;

use App\Http\Controllers\RelationshipManager\RelationshipManagerController;
use App\Models\InvestmantIdeas;
use Illuminate\Http\Request;

class InvestmantIdeasController extends RelationshipManagerController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $investmantideas = InvestmantIdeas::whereRelationshipManagerId(\Auth::guard('relationshipmanager')->user()->id)->get();

        // return view('relationshipmanager.investmantideas.index',['investmantideas'=>$investmantideas]);

        $investmantideas = InvestmantIdeas::paginate(3);
        return view('relationshipmanager.investmantideas.index')->with('investmantideas', $investmantideas);
    }

    public function search(Request $request)
    {



        $search_text = $_GET['query'];

        $investmantideas = InvestmantIdeas::where('investmant_idea', 'LIKE', '%' . $search_text . '%')->orWhere('risk', 'LIKE', '%' . $search_text . '%')
        ->orWhere('product', 'LIKE', '%' . $search_text . '%') ->orWhere('sector', 'LIKE', '%' . $search_text . '%')->get();
        return view('relationshipmanager.investmantideas.search')->with('investmantideas', $investmantideas);
    }
}
