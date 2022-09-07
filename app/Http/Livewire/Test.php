<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contracts\Repositories\QuestionRepositoryContract;
use App\Models\Question;

class Test extends Component
{
    public function render()
    {
        $questions = Question::all();

        return view('livewire.test', [
            'questions' => $questions
        ]);
    }
}
