<?php

namespace App\Repositories;

use App\Interfaces\RepositoryFetchable;
use App\Interfaces\RepositoryQueryCustom;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryFetchable, RepositoryQueryCustom
{
    protected ?Builder $query = null;

    public function fetchAll(int $limit = 50): LengthAwarePaginator
    {
        return $this->newQuery()->paginate();
    }

    public function fetchSearch(string $value, int $limit = 50): LengthAwarePaginator
    {
        return $this->searchQuery($this->newQuery(), $value)->paginate();
    }

    public function fetchById(int $id): ?Model
    {
        return $this->newQuery()->find($id);
    }

    public function newQuery(): Builder
    {
        return $this->query ?? $this->getModel()::query();
    }

    abstract public function getModel(): Model;

    public function setQuery(Builder $query): void
    {
        $this->query = $query;
    }

    protected function searchDates(Builder $query, string $value, string $field = 'created_at'): Builder
    {
        try {
            $date = Carbon::createFromFormat('d/m/Y', $value);
            $query->orWhereDate($field, $date->startOfDay());
        } catch (\Exception $e) {
            try {
                $date = Carbon::createFromFormat('m/Y', $value);
                $query->orWhereBetween($field, [$date->startOfMonth()->startOfDay(), $date->copy()->endOfMonth()->endOfDay()]);
            } catch (\Exception $e) {
            }
        }

        return $query;
    }
}
