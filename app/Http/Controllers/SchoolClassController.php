<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolClassController extends Controller

{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Kelas";

        $classes = [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major' => 'AKL',
                'homeroom_teacher' => 'Budi Santoso'
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major' => 'TKJ',
                'homeroom_teacher' => 'Siti Aminah'
            ]
        ];

        return view('classes.index', compact('title', 'classes'));
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Kelas";

        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
            ],
        ];

        $teachers = [
            [
                'id' => 1,
                'name' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'Siti Aminah',
            ],
        ];

        return view('classes.create', compact('title', 'majors', 'teachers'));
    }

    public function show($id)
    {
        $title = "Sistem Sekolah - Detail Kelas";

        $class = [
            'id' => $id,
            'name' => 'XII AKL 1',
            'grade' => 'XII',
            'major' => 'AKL',
            'homeroom_teacher' => 'Budi Santoso'
        ];

        return view('classes.show', compact('title', 'class'));
    }

    public function edit($id)
    {
        $title = "Sistem Sekolah - Edit Kelas";

        $class = [
            'id' => $id,
            'name' => 'XII AKL 1',
            'grade' => 'XII',
            'major' => 'AKL',
            'homeroom_teacher' => 'Budi Santoso'
        ];

        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
            ],
        ];

        $teachers = [
            [
                'id' => 1,
                'name' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'Siti Aminah',
            ],
        ];

        return view(
            'classes.edit',
            compact('title', 'class', 'majors', 'teachers')
        );
    }

    public function store(Request $request)
    {
        return redirect()->route('classes.index');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('classes.index');
    }

    public function destroy($id)
    {
        return redirect()->route('classes.index');
    }
}