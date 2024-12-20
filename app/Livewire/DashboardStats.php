<?php

namespace App\Livewire;

use App\Models\Ad;
use App\Models\User;
use Livewire\Component;

class DashboardStats extends Component
{
    public $adsCount;

    public function mount()
    {
        $this->adsCount = Ad::count();
    }
    public function render()
    {
        return view('livewire.dashboard-stats');
    }
}
