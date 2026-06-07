<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
        return Student::all();
    }

    public function show($id)
    {
        return Student::find($id);
    }

    public function updateStudent($id)
    {
        $student = Student::find($id);

        $student->name = "Updated Name";

        $student->save();

        return "Updated";
    }

    public function deleteStudent($id)
    {
        Student::destroy($id);

        return "Deleted";
    }

    public function insert()
    {
        Student::create([
            'name' => 'Reven',
            'email' => 'reven@gmail.com',
            'age' => 21
        ]);

        return "Inserted";
    }
}
