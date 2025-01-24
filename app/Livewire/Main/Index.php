<?php

namespace App\Livewire\Main;

use Livewire\Component;
use App\Models\JobApplication;

class Index extends Component
{
    public $jobs;

    public function mount()
    {
        $this->jobs = JobApplication::all();
    }

    public function render()
    {
        return view('livewire.main.index')->layout('layouts.app');
    }
}
