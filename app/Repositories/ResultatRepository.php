<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Resultat;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\AbstractRepository;
use App\Contracts\Repositories\ResultatRepositoryContract;


class ResultatRepository extends AbstractRepository implements ResultatRepositoryContract
{
    public function getModel(): Model
    {
        return new Resultat();
    }
}
