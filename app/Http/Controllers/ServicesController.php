<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=Services::get();
        return view('services_table',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services_form');
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
              'shortdesc' => 'required',
              'description' => 'required',
              'image' => 'required'
            ]
            );

        $title=$request->get('title');
        $shortdesc=$request->get('shortdesc');
        $desc=$request->get('description');
        $image=$request->file('image');
        $getImage=$image->getClientOriginalName();
        $image->move('images/',$getImage);

        $service=new Services([
            'title'=>$title,
            'shortdesc'=>$shortdesc,
            'description'=>$desc,
            'image'=>$getImage
        ]);

        $service->save();
        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=Services::find($id);
        return view('show_services',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Services::find($id);
        return view('edit_services',compact('service'));
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
        $shortdesc=$request->get('shortdesc');
        $desc=$request->get('description');
        $image=$request->file('image');

        if(!empty($image)){
            $getImage=$image->getClientOriginalName();
            $image->move('images/',$getImage);
            $service=Services::find($id);
            $service->title=$title;
            $service->shortdesc=$shortdesc;
            $service->description=$desc;
            $service->image=$getImage;
            $service->update();
            return redirect('/services');
         }

         else{
            $service=Services::find($id);
            $service->title=$title;
            $service->shortdesc=$shortdesc;
            $service->description=$desc;
            $service->update();
            return redirect('/services');
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
        $service= Services::find($id);
        $service->delete();
        return redirect('/services');
    }
}
