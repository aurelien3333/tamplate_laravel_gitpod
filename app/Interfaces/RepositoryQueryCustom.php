<?php

namespace App\Interfaces;


use Illuminate\Database\Eloquent\Builder;

interface RepositoryQueryCustom
{

    public function setQuery(Builder $query):void;

}
