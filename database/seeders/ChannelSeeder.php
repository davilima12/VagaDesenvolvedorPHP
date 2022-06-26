<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Channel;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =   [
            [
                'name' => 'History'
            ],
            [
                'name' => 'MTV'
            ],
            [
                'name' => 'SBT'
            ]
            ];
            foreach ($array as $valor) {
                Channel::create(
                   $valor
                );
            }
    }
}
