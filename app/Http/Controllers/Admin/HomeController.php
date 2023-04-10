<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\InvestmantIdeas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Assign;

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

    // public function getRiskOptions()
    // {
    // $options = InvestmantIdeas::select('risk')->distinct()->get();
    // $risk_options = [];
    // foreach ($options as $option) {
    //     $risk_options[$option->risk] = $option->risk;
    // }
    // return view('add_ideas')->with('riskOptions', $riskOptions);
    // }

    public function save(Request $request)
    {
       // $riskOptions = getRiskOptions();
        $idea = new InvestmantIdeas;
        $idea->investmant_idea = $request->title;
        $idea->created_at = $request->created;
        $idea->updated_at = $request->updated;
        $idea->content = $request->content;
        $idea->abstract = $request->abstract;
        $idea->product = $request->prod_type;
        $idea->risk= $request->risk;
        $idea->expire_at= $request->exp_date;
        $idea->instruments = $request->instruments;
        $idea->Currency = $request->currency;
        $idea->Major_Sector = $request->maj_sector;
        $idea->Minor_Sector = $request->min_sector;
        $idea->Region = $request->region;
        $idea->Country = $request->country;
        echo $idea->save();
        return redirect('admin/dashboard');
    }

    public function search(Request $request)
    {
        $search_text = $_GET['query'];

        $investmantideas = InvestmantIdeas::where('investmant_idea', 'LIKE', '%' . $search_text . '%')->orWhere('risk', 'LIKE', '%' . $search_text . '%')
            ->orWhere('product', 'LIKE', '%' . $search_text . '%')->get();
            
        return view('admin.search_ideas')->with('investmantideas', $investmantideas);
    }

    public function delete($id)
    {
        $count_before = DB::table('investmant_ideas_tables')->count();
        DB::delete('delete from investmant_ideas_tables where id = ?', [$id]);
        $count_after = DB::table('investmant_ideas_tables')->count();

        if ($count_before > 0 && $count_after == 0) {
        DB::statement('ALTER TABLE investmant_ideas_tables AUTO_INCREMENT = 1');
        }

        return redirect('admin/dashboard')->with('delete', 'Record Successfully Deleted');
    }

    // public function edit($id)
    // {
    //     $idea = DB::find($id);
    //     return view('admin.edit_ideas', compact('idea'));
    // }   

     public function edit($id)
    {
        $investmantideas = InvestmantIdeas::find($id);
        return view('admin.edit_ideas')->with('investmantideas', $investmantideas);
    }

    public function view($id)
    {
        $investmantideas = InvestmantIdeas::find($id);
        return view('admin.view_ideas')->with('investmantideas', $investmantideas);
    }

    public function update(Request $request, $id)
{
    $idea = InvestmantIdeas::find($id);
    $idea->investmant_idea = $request->input('title');
    $idea->created_at = $request->input('created');
    $idea->updated_at = $request->input('updated');
    $idea->content = $request->input('content');
    $idea->abstract = $request->input('abstract');
    $idea->product = $request->input('prod_type');
    $idea->risk= $request->input('risk');
    $idea->expire_at= $request->input('exp_date');
    $idea->instruments = $request->input('instruments');
    $idea->Currency = $request->input('currency');
    $idea->Major_Sector = $request->input('maj_sector');
    $idea->Minor_Sector = $request->input('min_sector');
    $idea->Region = $request->input('region');
    $idea->Country = $request->input('country');

    //$idea->fill($request->all());
    $idea->save();

    return redirect('admin/dashboard')->with('update', 'Record Successfully Updated');
}


}
