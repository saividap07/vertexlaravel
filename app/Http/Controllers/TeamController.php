<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::get();
        return view('team_table',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'role'=>'required',
            'image'=>'required'
        ]);

        $name=$request->get('name');
        $role=$request->get('role');
        $image=$request->file('image');
        $getImage=$image->getClientOriginalName();
        $image->move('images/',$getImage);

        $team=new Team([
            'name'=>$name,
            'role'=>$role,
            'image'=>$getImage
        ]);

        $team->save();
        return redirect('/team');
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
        $team = Team::find($id);
        return view('edit_team',compact('team'));
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
        $name = $request->get('name');
        $role = $request->get('role');
        $image=$request->file('image');
        if(!empty($image)){
            $getImage=$image->getClientOriginalName();
            $image->move('images/',$getImage);
            $team=Team::find($id);
            $team->name=$name;
            $team->role=$role;
            $team->image=$getImage;
            $team->update();
            return redirect('/team');
         }

         else{
            $team=Team::find($id);
            $team->name=$name;
            $team->role=$role;
            $team->update();
            return redirect('/team');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect('/team');
    }
}
