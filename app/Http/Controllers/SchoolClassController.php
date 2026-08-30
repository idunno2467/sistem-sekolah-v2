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

        return view('classes.create', compact('title'));
    }

    public function store(Request $request)
    {
        return "Data kelas berhasil disimpan";
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

        return view('classes.edit', compact('title', 'class'));
    }

    public function update(Request $request, $id)
    {
        return "Data kelas berhasil diperbarui";
    }

    public function destroy($id)
    {
        return "Data kelas berhasil dihapus";
    }
}