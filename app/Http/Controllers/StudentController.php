<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        $students = Student::all();
        return view('student',['students'=>$students,'layout'=>'index']);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('student',['students'=>$students, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->age = $request->input('age');
        $student->carreer = $request->input('carreer');
        $student->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'edit']);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->age = $request->input('age');
        $student->carreer = $request->input('carreer');
        $student->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect ('/');
    }
}
