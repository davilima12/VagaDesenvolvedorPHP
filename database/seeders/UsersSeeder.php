<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
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
                'name' => 'Brian'
            ],
            [
                'name' => 'Bruno'
            ],
            [
                'name' => 'Otavio'
            ]
            ];
            foreach ($array as $valor) {
                User::create(
                   $valor
                );
            }

    }
}
