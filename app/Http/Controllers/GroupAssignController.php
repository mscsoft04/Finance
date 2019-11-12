<?php

namespace App\Http\Controllers;

use App\GroupAssign;
use Illuminate\Http\Request;

class GroupAssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\GroupAssign  $groupAssign
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
       
        return view('group_assign.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GroupAssign  $groupAssign
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupAssign $groupAssign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GroupAssign  $groupAssign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupAssign $groupAssign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GroupAssign  $groupAssign
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupAssign $groupAssign)
    {
        //
    }
}
