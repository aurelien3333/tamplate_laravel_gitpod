<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestItems extends Component
{
    public $question;

    public function mount($question)
    {
        $this->question = $question;
    }
    public function render()
    {
        return view('livewire.test-items');
    }
}
