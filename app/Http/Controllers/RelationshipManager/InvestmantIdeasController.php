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

        $investmantideas = InvestmantIdeas::all();
        return view('relationshipmanager.investmantideas.index')->with('investmantideas', $investmantideas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function edit(Post $post)
    // {
    //     // if(\Auth::guard('admin')->user()->id == $post->admin_id){
    //     //     return view('admin.posts.edit',['post'=>$post]);
    //     // }

    //     // if(\Auth::guard('admin')->user()->can('view',$post)){
    //     //     return view('admin.posts.edit',['post'=>$post]);
    //     // }

    //     $this->authorize('view',$post);
    //     return view('admin.posts.edit',['post'=>$post]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Post $post)
    // {
    //     $this->authorize('update',$post);
    //     $post->update([
    //         'title'=>$request->title,
    //         'description'=>$request->description
    //     ]);
    //     return redirect()->back();
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Post $post)
    // {
    //     //
    // }
}
