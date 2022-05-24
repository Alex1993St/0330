<?php

namespace Database\Seeders;

use App\Repositories\Transport\TransportRepository;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Create default data
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'BMW V6',
                'type' => 'car',
                'hasWheels' => 1,
                'wheels' => 4
            ], [
                'title' => 'Seagull',
                'type' => 'bicycle',
                'hasWheels' => 1,
                'wheels' => 2
            ], [
                'title' => 'boeing 47',
                'type' => 'airplane',
                'hasWheels' => 1,
                'wheels' => 3
            ], [
                'title' => 'oasis',
                'type' => 'boat',
                'hasWheels' => 0,
                'wheels' => null
            ]
        ];

        app(TransportRepository::class)->insert($data);
    }
}
