<?php

namespace App\Repositories\Color;

interface ColorRepository
{
    /**
     * @param array $data
     * @return mixed
     */
    public function insert(array $data);

    /**
     * @param int $limit
     * @return mixed
     */
    public function getRandomIds(int $limit);
}
