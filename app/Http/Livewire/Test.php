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
        'Pas du tout d’accord	',
        'Pas d’accord	',
        'Neutre	',
        'D’accord',
        'Tout à fait d’accord',
        'Ne sais pas',

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

    }

    public function previous()
    {
        if($this->step > 1) {
            $this->step--;
        }
    }

    public function reponse($id)
    {
        $this->reponseSelect[$id] =
        [
            'question' => $id,
            'reponse' => $this->reponse,
        ];

        $this->reponseSelect['reponse'] = $id;
        $this->step++;

    }

    public function finish()
    {
        dd($this->reponseSelect);
    }
    public function render()
    {
        $this->question = Question::find($this->step);

        return view('livewire.test');
    }
}

