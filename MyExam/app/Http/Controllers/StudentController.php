<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = DB::table('students')->get();

        return view('students.index', compact('students'));
    }

    public function store(): RedirectResponse
    {
        Student::create([
            'name' => 'Raj',
            'rollno' => '22',
            'subject' => 'MVC Laravel',
            'marks' => 75,
            'grade' => 'B+',
        ]);

        return redirect()->route('students.table');
    }

    public function table(): View
    {
        $students = DB::table('students')->get();

        return view('students.table', compact('students'));
    }

    public function result(): View
    {
        $student = Student::latest()->first();

        return view('result', compact('student'));
    }
}
