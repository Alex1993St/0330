<?php

namespace Database\Seeders;

use App\Repositories\Color\ColorRepository;
use App\Repositories\Transport\TransportRepository;
use Illuminate\Database\Seeder;

class ColorTransportSeeder extends Seeder
{
    const COUNT_ID = 2;

    /**
     * Run the database seeds.
     *
     * @return bool|string
     */
    public function run()
    {
        $transports = app(TransportRepository::class)->selectAll();

         if ($transports->isNotEmpty()) {
             $transports->map(function ($transport) {
                 $colors = app(ColorRepository::class)->getRandomIds(self::COUNT_ID);
                 $transport->colors()->attach($colors);
             });

             return true;
         }
        return 'Transport empty';
    }
}
