<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return response()->json([
            'message' => 'halaman index',
            'data' => $students
        ],200);
    }

    public function store(StudentRequest $studentRequest)
    {
        $student = new Student;
        $student->nama = $studentRequest->nama;
        $student->alamat = $studentRequest->alamat;
        $student->no_telepon = $studentRequest->no_telepon;
        $student->save();

        return response()->json([
            'message' => 'user created successfully',
            'data' => $student
        ],200);
    }

    public function edit(Student $student)
    {
        return response()->json([
            'message' => 'success',
            'data' => $student
        ],200);
    }

    public function update(StudentRequest $studentRequest, Student $student)
    {
        $student->nama = $studentRequest->nama;
        $student->alamat = $studentRequest->alamat;
        $student->no_telepon = $studentRequest->no_telepon;
        $student->save();

        return response()->json([
            'message' => 'data updated successfully',
            'data' => $student
        ],200);
    }

    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return response()->json([
            'message' => 'data deleted successfully'
        ],200);
    }
}
