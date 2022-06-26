<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WatchedTime;

class WatchedTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['user_id'=> '1',
            'channel_id'=> '1',
            'minutes' => '100.0',
            'date' => '2021-01-01 00:00:00.0'
            ],
            ['user_id'=>'1',
            'channel_id'=>'1',
            'minutes' =>'180.0',
            'date' =>'2021-01-02 00:00:00.0'
            ],
            ['user_id'=>'1',
            'channel_id'=>'1',
            'minutes' =>'150.0',
            'date' =>'2021-01-03 00:00:00.0'
            ],
            ['user_id'=>'1',
            'channel_id'=>'1',
            'minutes' =>'110.0',
            'date' =>'2021-01-04 00:00:00.0'
            ],
            ['user_id'=>'2',
            'channel_id'=>'1',
            'minutes' =>'110.0',
            'date' =>'2021-01-04 00:00:00.0'
            ],
            ['user_id'=>'2',
            'channel_id'=>'1',
            'minutes' =>'140.0',
            'date' =>'2021-01-05 00:00:00.0'
            ],
            ['user_id'=>'2',
            'channel_id'=>'1',
            'minutes' =>'190.0',
            'date' =>'2021-01-06 00:00:00.0'
            ],
            ['user_id'=>'3',
            'channel_id'=>'1',
            'minutes' =>'170.0',
            'date' =>'2021-01-01 00:00:00.0'
            ],
            ['user_id'=>'3',
            'channel_id'=>'1',
            'minutes' =>'120.0',
            'date' =>'2021-01-02 00:00:00.0'
            ],
            ['user_id'=>'3',
            'channel_id'=>'1',
            'minutes' =>'130.0',
            'date' =>'2021-01-03 00:00:00.0'
            ],
            ['user_id'=>'1',
            'channel_id'=>'2',
            'minutes' =>'130.0',
            'date' =>'2021-01-03 00:00:00.0'
            ],
            ['user_id'=>'2',
            'channel_id'=>'2',
            'minutes' =>'130.0',
            'date' =>'2021-01-03 00:00:00.0'
            ],
            ['user_id'=>'3',
            'channel_id'=>'2',
            'minutes' =>'125.0',
            'date' =>'2021-01-03 00:00:00.0'
            ],
            ['user_id'=>'1',
            'channel_id'=>'2',
            'minutes' =>'110.0',
            'date' =>'2021-01-05 00:00:00.0'
            ],
            ['user_id'=>'1',
            'channel_id'=>'2',
            'minutes' =>'100.0',
            'date' =>'2021-01-01 00:00:00.0'
            ],
            ['user_id'=>'2',
            'channel_id'=>'2',
            'minutes' =>'120.0',
            'date' =>'2021-01-01 00:00:00.0'
            ],
            ['user_id'=>'3',
            'channel_id'=>'2',
            'minutes' =>'120.0',
            'date' =>'2021-01-01 00:00:00.0'
            ]

        ];

        foreach ($array as $valor) {
            WatchedTime::create(
               $valor
            );
        }


    }
}
