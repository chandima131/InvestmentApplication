<?php

namespace App\Http\Controllers\CLient;

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
        $where=[];
        $where[]=['assign.status','=',0];
        $ideas = DB::table('assign')
        ->join('clients', 'assign.client_id', '=', 'clients.client_id') // joining the contacts table , where user_id and contact_user_id are same
            ->join('investmant_ideas_tables', 'assign.investmant_idea_id', '=', 'investmant_ideas_tables.id')
            ->select("assign.*","clients.*","assign.id as assign_id","investmant_ideas_tables.*")
            ->where($where)
             ->get();
        return view('dashboard')->with('ideas',$ideas);
    }
    public function rms()
    {

        $clients = DB::table('relationship_managers')
             ->select('relationship_managers.*')
            ->get();
       return  view('expolre')->with('relationship_managers', $clients);

     }
    public function assigned()
    {
        $where=[];
        $where[]=['assign.status','=',1];
        $ideas = DB::table('assign')
        ->join('clients', 'assign.client_id', '=', 'clients.client_id') // joining the contacts table , where user_id and contact_user_id are same
            ->join('investmant_ideas_tables', 'assign.investmant_idea_id', '=', 'investmant_ideas_tables.id')
            ->where($where)
             ->get();
        return view('assigned')->with('ideas',$ideas);    
    }

    public function edit($id)
    {
        $clients = Clients::find($id);
        $investmantideas = InvestmantIdeas::all();

        return view('relationshipmanager.edit')->with('clients', $clients)->with('investmantideas', $investmantideas);
    }
    public function profile()
    {
        
        $clients = optional( Clients::where('client_id', Auth::user()->id))->first();
 
        return view('profile')->with('profile', $clients);
    }
    
    public function update($id,$status)
    {
        $where = [];
        $where[] = ['assign.id', '=', $id];
        $updateData = ['status' => $status];

        $blog = DB::table('assign')
            ->where($where)
            ->update($updateData);
         return redirect('dashboard');
    }

    public function Register_update(Request $request, $id)
    {
        $user = Clients::where('client_id', Auth::user()->id)->first();
        if($user) {
            $where[] = ['clients.client_id', '=',  Auth::user()->id];
            $updateData = $request->except('_token');
            $blog = DB::table('clients')
                ->where($where)
                ->update($updateData);
        }else{
        
            $input = $request->all();
            $input['client_id'] = Auth::user()->id;
            
                $blog =  Clients::create($input);
         }
         return redirect('dashboard');
     }
 
}
