<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $groups = $user->ownedgroup;


        return view('myGroups',compact('groups','user'));

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
        $input = $request->all();
        $group = Group::create($input);

        $user = User::find(Auth::user()->id);
//        dd($user->toArray());
        $user->ownedgroup()->save($group);



        return redirect('group_control');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::find($id);
        $user = User::find(Auth::user()->id);


        $members = $group->member;



        $posts = null;

        try{
            $posts = $group->posts;

        }catch (Exception $n){};

        return view('approvedGroupPage',compact(['posts','members','user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $req = Request::find($id);
        $id = $req->requested_for->id;
        $req->delete();

        return redirect('requests/'.$id);
    }

    public function get_request($id)
    {
//        dd("Ok");
        $group = Group::find($id);
        $requests = $group->requests;

        return view('Requests',compact('requests'));
    }

    public function accept($id)
    {
        $req = \App\Request::find($id);
        $group = $req->requested_for;
        $user = $req->requested_by;
        $id = $group->id;

        $group->member()->save($user);
        $req->delete();
        return redirect('requests/'.$id);
    }
}
