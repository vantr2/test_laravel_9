<?php

namespace Core\Project\App\Repositories;

use Skeleton\Core\Base\Contracts\BaseRepositoryInterface;
use Skeleton\Core\Base\Repositories\BaseRepository;

/**
 * Class TestRepository
*/
class TestRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return 'model_path\model_name';
    }
}
