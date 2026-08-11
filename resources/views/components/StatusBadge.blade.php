<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatusBadge extends Component
{
    public string $status;
    public string $colorClass;

    public function __construct(string $status = 'Aktif')
    {
        $this->status = $status;
        $this->colorClass = match (strtolower($status)) {
            'aktif' => 'bg-emerald-600',
            'tidak aktif' => 'bg-red-600',
            default => 'bg-slate-500',
        };
    }

    public function render()
    {
        return view('components.status-badge');
    }
}