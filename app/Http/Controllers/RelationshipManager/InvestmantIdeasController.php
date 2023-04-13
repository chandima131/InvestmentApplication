<?php

namespace App\Http\Controllers\RelationshipManager;

use App\Http\Controllers\RelationshipManager\RelationshipManagerController;
use App\Models\InvestmantIdeas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestmantIdeasController extends RelationshipManagerController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $investmantideas = InvestmantIdeas::select("*")
            ->where("rm_status", "=", 1)
            ->get();
        // $investmantideas = InvestmantIdeas::paginate(3);
        return view('relationshipmanager.investmantideas.index')->with('investmantideas', $investmantideas);
    }

    public function search(Request $request)
    {
        $search_text = $_GET['query'];

        $investmantideas = InvestmantIdeas::where('investmant_idea', 'LIKE', '%' . $search_text . '%')->orWhere('risk', 'LIKE', '%' . $search_text . '%')
            ->orWhere('product', 'LIKE', '%' . $search_text . '%')->orWhere('Major_Sector', 'LIKE', '%' . $search_text . '%')->orWhere('Minor_Sector', 'LIKE', '%' . $search_text . '%')->get();

        return view('relationshipmanager.investmantideas.search')->with('investmantideas', $investmantideas);
    }

    public function viewmore($id)
    {
        $investmantideas = InvestmantIdeas::find($id);
        // return $investmantidea;
        return view('relationshipmanager.investmantideas.viewmore')->with('investmantideas', $investmantideas);
    }

    public function suggested()
    {

        // $investmantideas = InvestmantIdeas::paginate(3);
        // return view('relationshipmanager.investmantideas.suggested')->with('investmantideas', $investmantideas);
        $investmantideas = InvestmantIdeas::select("*")
            ->where("rm_status", "=", 0)
            ->get();
        // $investmantideas = InvestmantIdeas::paginate(3);
        return view('relationshipmanager.investmantideas.suggested')->with('investmantideas', $investmantideas);
    }

    public function accept($id)
    {
        $status = InvestmantIdeas::select('rm_status')->where('id', $id)->first();
        if ($status->rm_status == 0) {
            $status = 1;
        }

        InvestmantIdeas::where('id', $id)->update(['rm_status' => $status]);
        return redirect()->back()->with('Success', 'Investment Idea Successfully Accepted');
    }

    public function notinteretbyrm($id)
    {
        $status = InvestmantIdeas::select('rm_status')->where('id', $id)->first();
        if ($status->rm_status == 0) {
            $status = 2;
        }

        InvestmantIdeas::where('id', $id)->update(['rm_status' => $status]);
        return redirect()->back()->with('delete', 'Not Interest in to Investment Idea');
    }
}
