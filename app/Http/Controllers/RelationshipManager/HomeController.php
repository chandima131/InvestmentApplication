<?php

namespace App\Http\Controllers\RelationshipManager;

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
        return view('relationshipmanager.dashboard');
    }

    public function clients()
    {

        $clients = DB::table('clients')
             ->select('clients.*')
            ->get();

        // $clients = DB::table('clients')
        // ->join('assign','assign.client_id', '=', 'clients.client_id')
        // ->join('investmant_ideas_tables','investmant_ideas_tables.id', '=', 'assign.investmant_idea_id')
        //  ->select('clients.*',  'assign.*','investmant_ideas_tables.id as invest_id',"investmant_ideas_tables.*")
        // ->get();

        // $clientss=[];

        //     foreach ($clients as $row) {
        //         $investment = [
        //             'id' => $row->invest_id,
        //             'investment_name' => $row->investmant_idea
        //         ];

        //         if (!isset($clientss[$row->client_id])) {
        //             $clientss[$row->client_id] = [
        //                 'client_id' => $row->client_id,
        //                 'name'=>$row->name,
        //                  'email'=>$row->email,
        //                   'age'=>$row->age,
        //                  'preferred_product'=>$row->preferred_product,
        //                  'risk'=>$row->risk,
        //                 'investment' => [],
        //                 'created_at'=>$row->created_at,
        //                 'status'=>$row->status
        //             ];
        //         }

        //         if (!is_null($row->invest_id)) {
        //             $clientss[$row->invest_id]['investment'][] = $investment;
        //         }
        //     }

        //     $clientss = array_values($clientss);
       return  view('relationshipmanager.dashboard')->with('clients', $clients);

        //  return $clients;
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
        return redirect('relationshipmanager/dashboard')->with('Success', 'Successfully Suggested the Investment Idea');
    }

    public function delete($id)
    {
        DB::delete('delete from clients where client_id = ?', [$id]);

        return redirect('relationshipmanager/dashboard')->with('delete', 'Client Successfully Deleted');
    }

    public function Register_update(Request $request, $id)
    {
        $input =$request->all();
        $input->client_id= Auth::user()->id;
        $blog =  Clients::create($input);
        return response()->json($blog, 200);    }

        public function clientsSummary(){
        $acceptedIdea = DB::table('clients')
        ->join('assign','assign.client_id', '=', 'clients.client_id')
        ->join('investmant_ideas_tables','investmant_ideas_tables.id', '=', 'assign.investmant_idea_id')
        ->get();

        // return $acceptedIdea;
        return view('relationshipmanager/clientsSummary')->with('acceptedIdea', $acceptedIdea);
        }

        public function clientSummarySearch(Request $request)
        {
            $search_text = $_GET['query'];

            $investmantideas = DB::table('clients')
            ->join('assign','assign.client_id', '=', 'clients.client_id')
            ->join('investmant_ideas_tables','investmant_ideas_tables.id', '=', 'assign.investmant_idea_id')
            ->where('investmant_idea', 'LIKE', '%' . $search_text . '%')->orWhere('name', 'LIKE', '%' . $search_text . '%')
                ->get();


             return view('relationshipmanager/clientSummarySearch')->with('investmantideas', $investmantideas);
            // return $investmantideas;
        }

}
