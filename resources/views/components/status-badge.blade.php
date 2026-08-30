@props(['status' => 'Aktif'])

<span class="inline-flex rounded-full px-3 py-1 text-xs font-medium {{ $badgeClass }}">
    {{ $status }}
</span>