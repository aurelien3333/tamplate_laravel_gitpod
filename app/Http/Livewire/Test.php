<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contracts\Repositories\QuestionRepositoryContract;
use App\Models\Question;

class Test extends Component
{
    public $step = 1;
    public $maxStep;

    public function mount()
    {
        $this->maxStep = Question::count();
    }

    public function next()
    {
        if($this->step < $this->maxStep) {
            $this->step++;
        }
    }

    public function previous()
    {
        if($this->step > 1) {
            $this->step--;
        }
    }
    public function render()
    {
        $question = Question::find($this->step);

        return view('livewire.test', [
            'question' => $question
        ]);
    }
}

