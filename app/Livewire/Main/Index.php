<?php

namespace App\Livewire\Main;

use Livewire\Component;
use App\Models\JobApplication;

class Index extends Component
{
    public $jobs;
    public $newJob = [
        'company' => '',
        'job' => '',
        'status' => 'applied',
        'location' => '',
        'responsibilities' => '',
        'allowance' => '',
        'platform' => '',
    ];

    protected $rules = [
        'newJob.company' => 'required|string|max:255',
        'newJob.job' => 'required|string|max:255',
        'newJob.status' => 'required|string',
        'newJob.location' => 'required|string|max:255',
        'newJob.responsibilities' => 'nullable|string',
        'newJob.allowance' => 'nullable|numeric',
        'newJob.platform' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->jobs = JobApplication::all();
    }

    public function addJob()
    {
        $this->validate();
        JobApplication::create($this->newJob);
        $this->reset('newJob');
        $this->jobs = JobApplication::all();
    }

    public function deleteJob($id)
    {
        JobApplication::findOrFail($id)->delete();
        $this->jobs = JobApplication::all();
    }

    public function render()
    {
        return view('livewire.main.index')->layout('layouts.app');
    }
}
