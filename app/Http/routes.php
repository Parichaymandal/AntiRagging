<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('index');
});


Route::get('/approved', function () {
    return view('approvedGroupPage');
});

Route::get('/groupChoose', function () {
    return view('groupChoosePage');
});

Route::get('/p', function () {
    return view('pendingGroupPage');
});

Route::get('/create_group', function () {
    return view('createGroup');
});


Route::resource('group','GroupPostController');
Route::resource('all','AllArticleController');
Route::get('requests/{id}','GroupController@get_request');
Route::get('accept/{id}','GroupController@accept');
Route::resource('group_control','GroupController');
Route::get('pending','GroupApprovalController@pending');
Route::resource('group_search','GroupApprovalController');

//Route::get('/group/{id}','GroupPostController@show');



Route::resource('comment','CommentController');

Route::get('/chatting',function (){
    $reciever_id = (int)Input::get('member_id');
    $reciever = App\User::find($reciever_id);


    $user = App\User::find(Auth::user()->id);

//    dd($reciever_id);

    $messages = null;


    $message1 = $user->messages->where('reciever_id',$reciever_id);


    $messages = $reciever->messages
        ->where('reciever_id',$user['id'])
        ->merge($message1)
        ->sortBy('created_at');

    $i = 0;
    $users = null;
    foreach ($messages as $m)
    {
        $users[$i] = $m->user->name;
        $i++;
    }

    return [$messages,$users];

});

Route::post('send','MessageController@store');
Route::resource('message','MessageController');



Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
