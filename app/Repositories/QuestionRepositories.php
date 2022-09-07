<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\AbstractRepository;
use App\Contracts\Repositories\QuestionRepositoryContract;

class QuestionRepositories extends AbstractRepository implements QuestionRepositoryContract
{
    public function getModel(): Model
    {
        return new Question();
    }


}


