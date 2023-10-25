<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonials::get();
        return view('testimonials_table',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonials_form');
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
            'review'=>'required',
            'image'=>'required'
        ]);

        $name=$request->get('name');
        $role=$request->get('role');
        $review=$request->get('review');
        $image=$request->file('image');
        $getImage=$image->getClientOriginalName();
        $image->move('images/',$getImage);
        $testimonial=new Testimonials([
            'name'=>$name,
            'role'=>$role,
            'review'=>$review,
            'image'=>$getImage
        ]);
        $testimonial->save();
        return redirect('/testimonials');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test=Testimonials::find($id);
        return view('edit_testimonials',compact('test'));
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
        $name=$request->get('name');
        $role=$request->get('role');
        $review=$request->get('review');
        $image=$request->file('image');
        if(!empty($image)){
            $getImage=$image->getClientOriginalName();
            $image->move('images/',$getImage);
            $test=Testimonials::find($id);
            $test->name=$name;
            $test->role=$role;
            $test->review=$review;
            $test->image=$getImage;
            $test->update();
            return redirect('/testimonials');
         }

         else{
            $test=Testimonials::find($id);
            $test->name=$name;
            $test->role=$role;
            $test->review=$review;
            $test->update();
            return redirect('/testimonials');
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
        $testimonial=Testimonials::find($id);
        $testimonial->delete();
        return redirect('/testimonials');
    }
}
