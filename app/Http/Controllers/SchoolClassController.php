
@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="max-w-7xl mx-auto px-6 py-8">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-[#16213A]">
            Daftar Kelas
        </h1>

        <a href="{{ route('classes.create') }}"
           class="bg-[#16213A] text-white px-4 py-2 rounded-lg">
            + Tambah Kelas
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-[#16213A] text-white">
                <tr>
                    <th class="px-5 py-3">No</th>
                    <th class="px-5 py-3">Nama Kelas</th>
                    <th class="px-5 py-3">Tingkat</th>
                    <th class="px-5 py-3">Jurusan</th>
                    <th class="px-5 py-3">Wali Kelas</th>
                    <th class="px-5 py-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($classes as $class)
                    <tr class="border-b">
                        <td class="px-5 py-3">{{ $loop->iteration }}</td>
                        <td class="px-5 py-3">{{ $class['name'] }}</td>
                        <td class="px-5 py-3">{{ $class['grade'] }}</td>
                        <td class="px-5 py-3">{{ $class['major'] }}</td>
                        <td class="px-5 py-3">
                            {{ $class['homeroom_teacher'] }}
                        </td>
                        <td class="px-5 py-3">
                            <a href="{{ route('classes.show', $class['id']) }}"
                               class="text-blue-600">Lihat</a>

                            <a href="{{ route('classes.edit', $class['id']) }}"
                               class="text-yellow-600 ml-3">Ubah</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center px-5 py-6">
                            Belum ada data kelas.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
