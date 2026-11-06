<?php

namespace App\Http\Controllers;


use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $search = $request->query('search');
        $class = $request->query('class');
        $major = $request->query('major');


        
        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])
            ->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('nis', 'like', "%{$search}%");
                });
            })
            ->when($class, fn($query, $class) => $query->where('class', '=', $class))
            ->when($major, fn($query, $major) => $query->where('major', '=', $major))
            ->paginate(10)
            ->withQueryString();


        $schoolClasses = ['X TKJ 1', 'X TKJ 2', 'X TKJ 3', 'X BiD', 'X AKL', 'XI TKJ 1', 'XI TKJ 2', 'XI TKJ 3', 'XI BiD', 'XI AKL', 'XII TKJ 1', 'XII TKJ 2', 'XII TKJ 3', 'XII BiD', 'XII AKL'];
        $majors = ['AKL', 'BiD', 'TKJ'];

        return view('students.index', [
            'title' => $title,
            'students' => $students,
            'schoolClasses' => $schoolClasses,
            'majors' => $majors
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";

        return view('students.create', [
            'title' => $title,
        ]);
    }
    
        public function store(StoreRequest $request)
    {
        //Validasi
        $valiatedrequest = $request->validated();

        //Tambahkan Data ke Database
        Student::create($valiatedrequest);

        //Handle If Success
        return redirect()->route('students.index');
    }


        public function show(Student $student)
    {
        $title = "Sistem Sekolah - Detail Siswa";

        return view('students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }

        public function edit(Student $student)
    {
        $title = "Sistem Sekolah - Edit Siswa";

        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    }

        public function update(Student $student, UpdateRequest $request)
    {
        //Validasi
        $valiatedrequest = $request->validated();

        //Update Data
        $student->update($valiatedrequest);

        //Handle If Success
        return redirect()->route('students.index');
    }

            public function destroy(Student $student)
    {
        //Delete Data
        $student->delete();

        //Handle If Success
        return redirect()->route('students.index');
    }
}
