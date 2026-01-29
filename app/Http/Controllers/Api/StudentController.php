<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json([
            'message' => "Hello Student",
            'status' => 'success',
            'data' =>$students,
        ]);
    }

    public function store_student(Request $request)
    {
        $student = Student::create([
            'name'   => $request->name,
            'email'  => $request->email,
            'mobile' => $request->mobile
        ]);

        return response()->json([
            'message' => 'Hello Student',
            'status'  => 'success',
            'data'    => $student,
        ], 201);
    }

}
