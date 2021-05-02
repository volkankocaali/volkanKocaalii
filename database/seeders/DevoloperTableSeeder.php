<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;

class DevoloperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'DEV1',
                'time' => '1',
                'difficulty' => '1',

            ],
            [
                'name' => 'DEV2',
                'time' => '1',
                'difficulty' => '2',

            ],
            [
                'name' => 'DEV3',
                'time' => '1',
                'difficulty' => '3',

            ],
            [
                'name' => 'DEV4',
                'time' => '1',
                'difficulty' => '4',

            ],
            [
                'name' => 'DEV5',
                'time' => '1',
                'difficulty' => '5',

            ],
        ];
        foreach ($data as $item){
            Developer::create($item);
        }
    }
}
