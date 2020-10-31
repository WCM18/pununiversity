<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courses;
use App\classes;

class CourseController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
       
        $courses=courses::all();
        return view('courses',['courses'=>$courses,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         //dd($classes);
        //$classes->classes->id;
        //dd($classes);
        $classes=classes::all();
        

        $courses=courses::all();
        return view('courses',['classes'=>$classes],['courses'=>$courses,'layout'=>'create']);
        
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
        $course=new courses();
        $classe=new classes();    
      
       
        $course->name=$request->input('name');
        //dd($course);
        $course->classes_id=$request->input('classes_id');
        //dd($course);
       
        $course->save();
        return redirect('p/');
        
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
        $classes=classes::all();
        $course=courses::find($id);
        $courses=courses::all();
        //dd($courses);
         return view('courses',[$classes],['courses'=>$courses,'course'=>$course,'layout'=>'show']);
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
        $course=courses::find($id);
        $courses=courses::all();
        return view('courses',['courses'=>$courses,'course'=>$course,'layout'=>'edit']);
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
        $course=courses::find($id);
       
       
       
        $course->name=$request->input('name');
        $course->save();
            return redirect('/p');
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
        $course=courses::find($id);

        
        $course->delete();
        
        
        return redirect('/p' )->with('success','User Deleted');
    }
}


