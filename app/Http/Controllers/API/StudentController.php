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
        return 'ini halaman student';
    }

    public function store(StudentRequest $studentRequest)
    {
        $student = new Student;
        $student->nama = $studentRequest->nama;
        $student->alamat = $studentRequest->alamat;
        $student->no_telepon = $studentRequest->no_telepon;
        $student->save();

        return response()->json([
            'message' => 'user berhasil ditambahkan',
            'data' => $student
        ],200);
    }
}
