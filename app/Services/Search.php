<?php

namespace App\Services;

use App\Models\Transport;

class Search
{
    /**
     * Filter product
     *
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getProducts(array $data)
    {
        $color = isset($data['color']) && $data['color'] ? $data['color'] : null;
        $hasWheels = isset($data['hasWheels']) && $data['hasWheels'] ? $data['hasWheels'] : null;
        $title = isset($data['title']) && $data['title'] ? $data['title'] : null;
        $type = isset($data['type']) && $data['type'] ? $data['type'] : null;
        $wheels = isset($data['wheels']) && $data['wheels'] ? $data['wheels'] : null;
        $sort = isset($data['sort']) && $data['sort'] ? $data['sort'] : 'asc';

        return Transport::with(['colors' => function ($q) use ($color) {
                $q->when($color, function ($q) use ($color) {
                    $q->where('color', $color);
                });
            }])
            ->where(function ($query) use ($color, $hasWheels, $title, $type, $wheels) {
                $query->when($hasWheels, function ($query) use ($hasWheels) {
                    return $query->where('hasWheels', $hasWheels);
                });
                $query->when($title, function ($query) use ($title) {
                    return $query->where('title', $title);
                });
                $query->when($type, function ($query) use ($type) {
                    return $query->where('type', $type);
                });
                $query->when($wheels, function ($query) use ($wheels) {
                    return $query->where('wheels', $wheels);
                });
            })->orderBy('id', $sort)->get();
    }
}
