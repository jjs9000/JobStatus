<?php

namespace App\Livewire\Modal;

use Livewire\Component;

class AddNewJob extends Component
{
    protected $listeners = ['openModal' => 'openModal'];

    public $company;
    public $job;
    public $status;
    public $location;
    public $responsibilities;
    public $allowance;
    public $platform;

    public $isOpen = false;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->resetForm();
        $this->isOpen = false;
    }

    private function resetForm()
    {
        $this->company = null;
        $this->job = null;
        $this->status = null;
        $this->location = null;
        $this->responsibilities = null;
        $this->allowance = null;
        $this->platform = null;
    }

    public function render()
    {
        return view('livewire.modal.add-new-job');
    }
}
