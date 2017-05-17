<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // User::get($request->all());


        $result = $this->user->get();

        // return response()->json([
        //         'status' => $result,
        //         'message' => 'created User.'
        //     ]);
        return response()->json([
                'status' => $result,
                'message' => 'GET User.'
            ]);
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
        // dd(2);
        // $this->validate($request, [
        //         'email' => 'required',
        //         'name' => 'required',
        //         'password' => 'required',
        //     ]);

        User::create($request->all());


        // $result = $this->user->create($request->all());

        // return response()->json([
        //         'status' => $result,
        //         'message' => 'created User.'
        //     ]);
        return response()->json([
                'message' => 'created User.'
            ]);
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
        User::destroy($id);

        return response()->json([
                'message' => 'remove User.'
            ]);
    }
}
