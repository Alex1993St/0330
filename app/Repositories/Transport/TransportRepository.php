<?php

namespace App\Repositories\Transport;

interface TransportRepository
{
    /**
     * @param array $data
     * @return mixed
     */
    public function insert(array $data);

    /**
     * @return mixed
     */
    public function selectAll();

    /**
     * @param string $color
     * @return mixed
     */
    public function withColor(string $color);
}
