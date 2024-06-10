<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use TimWassenburg\RepositoryGenerator\Repository\EloquentRepositoryInterface;

interface MasterRepositoryInterface extends EloquentRepositoryInterface
{
    public function paginate($param, ?array $searchFields = null, ?array $withRelations = null);
    public function getAll($param, ?array $searchFields = null, ?array $withRelations = null);
}
