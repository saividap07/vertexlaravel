<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio=Portfolio::get();
        return view('portfolio_table',compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required',
                'desc' => 'required',
                'type' => 'required',
                'image' => 'required',
                'link' => 'required'
            ]
        );

        $title=$request->get('title');
        $description=$request->get('desc');
        $type=$request->get('type');
        $link=$request->get('link');
        $image=$request->file('image');
        $getImage=$image->getClientOriginalName();
        $image->move('images/',$getImage);

        $portfolio=new Portfolio([
            'title'=>$title,
            'description'=>$description,
            'type'=>$type,
            'image'=>$getImage,
            'link'=>$link
        ]);

        $portfolio->save();
        return redirect('/portfolio');    
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
        $port=Portfolio::find($id);
        return view('edit_portfolio',compact('port'));
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
        $title=$request->get('title');
        $description=$request->get('desc');
        $type=$request->get('type');
        $link=$request->get('link');
        $image=$request->file('image');

        if(!empty($image)){
            $getImage=$image->getClientOriginalName();
            $image->move('images/',$getImage);
            $port=Portfolio::find($id);
            $port->title=$title;
            $port->description=$description;
            $port->type=$type;
            $port->link=$link;
            $port->image=$getImage;
            $port->update();
            return redirect('/portfolio');
         }

         else{
            $port=Portfolio::find($id);
            $port->title=$title;
            $port->description=$description;
            $port->type=$type;
            $port->link=$link;
            $port->update();
            return redirect('/portfolio');
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
        $portfolio=Portfolio::find($id);
        $portfolio->delete();
        return redirect('/portfolio');
    }
}
