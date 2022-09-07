<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\AbstractRepository;
use App\Contracts\Repositories\UserRepositoryContract;

class UserRepository extends AbstractRepository implements UserRepositoryContract
{
    public function getModel(): Model
    {
        return new User();
    }
}
