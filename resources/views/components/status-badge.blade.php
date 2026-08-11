@props(['status' => 'Aktif'])

@php
    $colorClass = match (strtolower($status)) {
        'aktif' => 'bg-emerald-600',
        'tidak aktif' => 'bg-red-600',
        default => 'bg-slate-500',
    };
@endphp

<span class="inline-block rounded px-2.5 py-1 text-xs font-semibold text-white {{ $colorClass }}">
    {{ $status }}
</span>