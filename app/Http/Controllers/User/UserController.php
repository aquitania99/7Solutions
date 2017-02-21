<?php

namespace Akela\Http\Controllers\User;

use Akela\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
//use Akela\Http\Requests;
use Akela\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();

        return view('users.show')->with([
            'data' => $data,
            'link' => 'dashboard',
            'page' => 'Add User'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add')->with([
            'link' => 'dashboard',
            'page' => 'Add User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //@TODO Validate data from the add user form

        if ($request->isMethod('post')) {
            //
            dd( 'dd',$request->getContent(), $request->input('firstname') );
            $dob = $request->input('birth-year') ."-". $request->input('birth-month') ."=" . $request->input('birth-day');
            $dob ="1975-01-25";
            // Add new user to Database
            $user = New User();

            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->username = $request->input('email');
            $user->email = $request->input('email');
            $user->password = bcrypt('Pass@word01');
            $user->mobile = $request->input('mobile');
            $user->gender = $request->input('gender');
            $user->dob = $dob;
            $user->birth_country = $request->input('birth-country');
            $user->birth_city = $request->input('birth-city');
//
//
            $user->save();

            dd('dd',$user);

        }


//        return Response::HTTP_CREATED;

        return view('scratch.scratch', [ 'test' => $user->jsonSerialize() ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
