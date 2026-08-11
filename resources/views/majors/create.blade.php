@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 flex items-end justify-between border-b border-[#E5E3DB] pb-5">
    <div>
        <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
            Manajemen Jurusan
        </p>

        <h1 class="font-display text-3xl font-semibold text-[#16213A]">
            Tambah Jurusan
        </h1>
    </div>

    <a href="{{ route('majors.index') }}"
        class="border border-[#16213A] px-5 py-2.5 text-sm font-medium text-[#16213A] transition hover:bg-[#16213A] hover:text-white">
        Kembali
    </a>
</div>

<div class="max-w-2xl border border-[#E5E3DB] bg-white p-6">
    <form action="{{ route('majors.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="code" class="mb-1 block text-xs font-semibold uppercase tracking-wider text-[#16213A]">
                Kode Jurusan
            </label>
            <input type="text" name="code" id="code" required placeholder="Contoh: TKJ"
                class="w-full border border-[#E5E3DB] p-2.5 text-sm focus:border-[#A16207] focus:outline-none">
        </div>

        <div>
            <label for="name" class="mb-1 block text-xs font-semibold uppercase tracking-wider text-[#16213A]">
                Nama Jurusan
            </label>
            <input type="text" name="name" id="name" required placeholder="Contoh: Teknik Komputer dan Jaringan"
                class="w-full border border-[#E5E3DB] p-2.5 text-sm focus:border-[#A16207] focus:outline-none">
        </div>

        <div>
            <label for="description" class="mb-1 block text-xs font-semibold uppercase tracking-wider text-[#16213A]">
                Deskripsi
            </label>
            <textarea name="description" id="description" rows="4" placeholder="Masukkan deskripsi singkat jurusan..."
                class="w-full border border-[#E5E3DB] p-2.5 text-sm focus:border-[#A16207] focus:outline-none"></textarea>
        </div>

        <div class="pt-3">
            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
                Simpan Jurusan
            </button>
        </div>
    </form>
</div>

@endsection