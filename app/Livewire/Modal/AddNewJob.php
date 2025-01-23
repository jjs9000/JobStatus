<?php

namespace App\Livewire\Modal;

use Livewire\Component;

class AddNewJob extends Component
{
    protected $listeners = ['openModal' => 'openModal'];

    public $isOpen = false;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.modal.add-new-job');
    }
}
