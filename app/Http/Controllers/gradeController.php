<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\grades;
use App\courses;
use App\students;

class gradeController extends Controller
{

    //<?php
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $grades=grades::all();
        $student=students::all();
        return view('grade',['students'=>$student,'grades'=>$grades,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $courses=courses::all();
      
        $students=students::all();
        $grades=grades::all();
        return view('grade',['students'=>$students],['courses'=>$courses,'grades'=>$grades,'layout'=>'create']);
        
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
        $student=new students();
        $grades=new grades();
        
        $grades->name=$request->input('name');
        $grades->courses_id=$request->input('courses_id');
        $grades->students_id=$request->input('students_id');
        
        $grades->save();
        return redirect('c/');
        
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
        $courses=courses::all();
        $courses=courses::find($id);
        $students=students::all();
        $students=students::find($id);

        $grade=grades::find($id);
        $grades=grades::all();
         return view('grade',[$students],[$courses],['grades'=>$grades,'grade'=>$grade,'layout'=>'show']);
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
        $grade=grades::find($id);
       //dd($grade);
        $grades=grades::all();
       // dd($grades);
        return view('grade',['grades'=>$grades,'grade'=>$grade,'layout'=>'edit']);
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
        $grade=grades::find($id);
        //dd($grade);
        //$grades=grades::all();
        //dd($grades);    
        $grade->name=$request->input('name');     
        
        $grade->save();
        return redirect('/c');
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
        $grade=grades::find($id);

        
        $grade->delete();
        
        
        return redirect('c/' )->with('success','User Deleted');
    }
}






