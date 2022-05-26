<?php

namespace App\Repositories\Transport;

use App\Models\Transport;

class Eloquent implements TransportRepository
{
    /**
     * Model to be used.
     * @var Transport
     */
    protected $model;

    /**
     * @param Transport $model
     */
    public function __construct(Transport $model) {
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
     * @return mixed
     */
    public function selectAll()
    {
        return $this->model->get();
    }

    /**
     * @param string $color
     * @return \Illuminate\Database\Eloquent\Builder|mixed
     */
    public function withColor(string $color)
    {
        return $this->model::with(['colors' => function ($query) use ($color) {
            $query->when($color, function ($q) use ($color) {
                $q->where('color', $color);
            });
        }])
            ->whereHas('colors', function ($query) use ($color) {
                $query->when($color, function ($q) use ($color) {
                    $q->where('color', $color);
                });
            });
    }
}
