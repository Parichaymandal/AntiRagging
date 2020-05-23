<?php

namespace App\Http\Controllers;

use App\Group;
use App\Post;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Mockery\CountValidator\Exception;
use Illuminate\Support\Facades\Auth;


class GroupPostController extends Controller
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
        $group = Group::find(1);
        $members = $group->member;

        $user = User::find(Auth::user()->id);



        if($user->group != null)
        {
            $group = $user->group;
            $noti = $user->group->posts->count();
            $user->num_of_noti = $noti;
            $user->save();
        }

//        dd($user['num_of_noti']);


        $posts = null;

        try{
            $posts = $group->posts()->orderBy('id','DESC')->get();

        }catch (Exception $n){};

        return view('approvedGroupPage',compact('user','posts','members'));
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
        $post = Post::create($input);

        $user = User::find(Auth::user()->id);
//        dd($user->toArray());
        $user->posts()->save($post);

        $group = Group::find($user['group_id']);
        $group->posts()->save($post);

        return redirect('group');

    }

    public function comments(Request $request)
    {
        $input = $request->all();
        $comment = Comment::create($input);

        $user = User::find(Auth::user()->id);
//        dd($user->toArray());
        $user->comments()->save($comment);

//        $group = Group::find($user['group_id']);
//        $group->comments()->save($post);

        return redirect('group');
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
        $members = $group->member;
        $user = User::find(Auth::user()->id);




        $posts = null;

        try{
            $posts = $group->posts;

        }catch (Exception $n){};

        return view('approvedGroupPage',compact('posts','members','user'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
