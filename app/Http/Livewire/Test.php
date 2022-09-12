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
        [
            'id' => 1,
            'reponse' => 'Pas du tout d’accord',
            'couleur' => '#fdd5d5',
        ],
        [
            'id' => 2,
            'reponse' => 'Pas d’accord',
            'couleur' => '#fee8e8',
        ],
        [
            'id' => 3,
            'reponse' => 'Neutre',
            'couleur' => '#ffffff',
        ],
        [
            'id' => 4,
            'reponse' => 'D’accord',
            'couleur' => '#e6fae9',
        ],
        [
            'id' => 4,
            'reponse' => 'Tout à fait d’accord',
            'couleur' => '#b4f1bd',
        ]
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

