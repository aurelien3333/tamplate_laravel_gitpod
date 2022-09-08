<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;

class Test extends Component
{
    public $step = 1;
    public $maxStep;

    public $question;

    public $reponseSelect = [];
    public $reponse;

    public $reponses = [
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
    ];

    public function mount()
    {
        $this->maxStep = Question::count();
    }

    public function next()
    {
        if($this->step < $this->maxStep) {
            $this->step++;
        }
        $this->reponseSelect['question'] = $this->step;
        $this->reponseSelect['reponse'] = $this->reponse;
        dd($this->reponseSelect);
    }

    public function previous()
    {
        if($this->step > 1) {
            $this->step--;
        }
    }
    public function render()
    {
        $this->question = Question::find($this->step);

        return view('livewire.test');
    }
}

