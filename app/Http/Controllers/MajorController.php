<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Jurusan";

        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',
            ],
        ];

        return view('majors.index', compact('title', 'majors'));
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Jurusan";

        return view('majors.create', compact('title'));
    }

    public function show($id)
    {
        $title = "Sistem Sekolah - Detail Jurusan";

        $major = [
            'id' => $id,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
        ];

        return view('majors.show', compact('title', 'major'));
    }

    public function edit($id)
    {
        $title = "Sistem Sekolah - Edit Jurusan";

        $major = [
            'id' => $id,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
        ];

        return view('majors.edit', compact('title', 'major'));
    }

    public function store(Request $request)
    {
        return redirect()->route('majors.index');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('majors.index');
    }

    public function destroy($id)
    {
        return redirect()->route('majors.index');
    }
}