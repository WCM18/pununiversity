<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use App\courses;


class studentlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $courses_id=$id;
            //dd($courses_id);
          
           $result=students::where('courses_id','=',$courses_id)->get();
           //dd( $result);
            //$courses=courses::all();
            return view('student1',['students'=>$result,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $courses=courses::all();
    $students=students::all();
  
    return view('student',['courses'=>$courses,'students'=>$students,'layout'=>'create']);
    
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
  // dd( $student);
   
   
    $student->firstName=$request->input('firstName');
    $student->secondName=$request->input('secondName');
    $student->age=$request->input('age');
    $student->courses_id=$request->input('courses_id');     
   
    $student->save();
    return redirect('b/');
    
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
    $student=students::find($id);
    $students=students::all();
    $courses=courses::all();
     return view('student',[$courses],['students'=>$students,'student'=>$student,'layout'=>'show']);
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
    $student=students::find($id);
    $students=students::all();
    return view('student',['students'=>$students,'student'=>$student,'layout'=>'edit']);
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
    $student=students::find($id);
   
    $student->firstName=$request->input('firstName');
    $student->secondName=$request->input('secondName');
    $student->age=$request->input('age');
    $student->save();
    return redirect('b/');
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
    $student=students::find($id);

    
    $student->delete();
    
    
    return redirect('b/' )->with('success','User Deleted');
}
}
