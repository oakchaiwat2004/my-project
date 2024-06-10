<?php

namespace App\Repositories\Eloquent;

use App\Models\Members;
use App\Repositories\MembersRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class MembersRepository.
 */
class MembersRepository extends MasterRepository implements MembersRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Members $model
     */
    public function __construct(Members $model)
    {
        parent::__construct($model);
    }
}
