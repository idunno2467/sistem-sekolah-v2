<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = Student::all();

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";

        return view('students.create', [
            'title' => $title,
        ]);
    }
    
        public function store(Request $request)
    {
        //Validasi
        $valiatedrequest = $request->validate([
        'nis'=>['required', 'string', 'size:4', 'unique:students,nis'],
        'name'=>['required', 'string'],
        'gender'=>['required', 'string', 'in:Laki-laki,Perempuan'],
        'major'=>['required', 'string', 'in:AKL,TKJ,BiD'],
        'class'=>['required', 'string']
        ]);

        //Tambahkan Data ke Database
        Student::create($valiatedrequest);

        //Handle If Success
        return redirect()->route('students.index');
    }

        public function show($id)
    {
        $title = "Sistem Sekolah - Detail Siswa";

        return view('students.show', [
            'title' => $title,
        ]);
    }

        public function edit($id)
    {
        $title = "Sistem Sekolah - Edit Siswa";

        return view('students.edit', [
            'title' => $title,
        ]);
    }

        public function update($id)
    {
        return "Updating student with ID: $id";
    }

            public function destroy($id)
    {
        return "Deleting student with ID: $id";
    }
}
