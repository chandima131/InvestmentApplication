<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\InvestmantIdeas;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // dd(\Auth::guard('admin')->user()->hasRole('editor'));
        return view('admin.dashboard');
    }


    public function adminTest()
    {
        // if(\Auth::guard('admin')->user()->hasRole('admin')){
        //     dd('only admin allowed');
        // }
        
        if(\Gate::forUser(\Auth::guard('admin')->user())->allows('admin')){
            dd('only admin allowed');
        }
        abort(403);
    }

    public function editorTest()
    {
        if(\Auth::guard('admin')->user()->hasRole('editor')){
            dd('only editor allowed');
        }
        abort(403);
    }

    public function add_ideas()
    {
        // dd(\Auth::guard('admin')->user()->hasRole('editor'));
        return view('admin.add_ideas');
    }

    public function ideas()
    {

        $ideas = DB::table('investmant_ideas_tables')
            ->get();
        return  view('admin.dashboard')->with('ideas', $ideas);
    }

    // public function update(Request $request)
    // {
    //     $ideas = ::where('client_id', $id)->first();
    //     $ideas->investmant_idea = $request->id;
    //     $ideas->save();
    //     return redirect('admin/dashboard');
    // }

    public function save(Request $request)
    {
        $idea = new InvestmantIdeas;
        $idea->investmant_idea = $request->title;
        $idea->created_at = $request->created;
        $idea->updated_at = $request->updated;
        $idea->abstract = $request->abstract;
        $idea->product = $request->prod_type;
        $idea->risk= $request->risk;
        $idea->date= $request->exp_date;
        echo $idea->save();
        return redirect('admin/dashboard');
    }


}
