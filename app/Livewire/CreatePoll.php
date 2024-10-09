<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;

    public $options = [''];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = '';
    }

    // public function mount() {

    // }
}
