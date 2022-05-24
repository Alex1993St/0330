<?php

namespace App\Repositories\Color;

use App\Models\Color;

class Eloquent implements ColorRepository
{
    /**
     * Model to be used.
     * @var Color
     */
    protected $model;

    /**
     * @param Color $model
     */
    public function __construct(Color $model) {
        $this->model = $model;
    }

    /**
     * @param array $data
     * @return mixed|void
     */
    public function insert(array $data)
    {
        $this->model->insert($data);
    }

    /**
     * @param int $limit
     * @return mixed
     */
    public function getRandomIds(int $limit = 2)
    {
        return $this->model->inRandomOrder()->limit($limit)->get()->pluck('id');
    }
}
