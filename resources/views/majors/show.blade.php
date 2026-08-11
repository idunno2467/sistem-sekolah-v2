@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 flex items-end justify-between border-b border-[#E5E3DB] pb-5">
    <div>
        <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
            Manajemen Jurusan
        </p>

        <h1 class="font-display text-3xl font-semibold text-[#16213A]">
            Detail Jurusan
        </h1>
    </div>

    <div class="flex gap-3">
        <!-- Perbaikan pada tombol Ubah -->
        <a href="{{ route('majors.edit', $major['id']) }}"
            class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
            Ubah
        </a>

        <a href="{{ route('majors.index') }}"
            class="border border-[#16213A] px-5 py-2.5 text-sm font-medium text-[#16213A] transition hover:bg-[#16213A] hover:text-white">
            Kembali
        </a>
    </div>
</div>

<div class="max-w-2xl border border-[#E5E3DB] bg-white p-6">
    <dl class="divide-y divide-[#EFEDE6]">
        <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
            <dt class="text-xs font-semibold uppercase tracking-wider text-[#16213A]">Kode Jurusan</dt>
            <dd class="mt-1 font-mono text-sm font-semibold text-slate-600 sm:col-span-2 sm:mt-0">{{ $major['code'] }}</dd>
        </div>

        <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
            <dt class="text-xs font-semibold uppercase tracking-wider text-[#16213A]">Nama Jurusan</dt>
            <dd class="mt-1 text-sm font-medium text-[#16213A] sm:col-span-2 sm:mt-0">{{ $major['name'] }}</dd>
        </div>

        <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
            <dt class="text-xs font-semibold uppercase tracking-wider text-[#16213A]">Deskripsi</dt>
            <dd class="mt-1 text-sm text-slate-600 sm:col-span-2 sm:mt-0">{{ $major['description'] }}</dd>
        </div>
    </dl>
</div>

@endsection