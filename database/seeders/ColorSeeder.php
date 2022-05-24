<?php

namespace Database\Seeders;

use App\Repositories\Color\ColorRepository;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Create default data
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'color' => 'red'],
            [ 'color' => 'blue'],
            [ 'color' => 'green'],
            [ 'color' => 'white']
        ];

        app(ColorRepository::class)->insert($data);
    }
}
