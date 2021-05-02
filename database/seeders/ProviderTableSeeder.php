<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderTableSeeder extends Seeder
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
                'provider_name' => 'IT',
                'provider_url' => 'http://www.mocky.io/v2/5d47f24c330000623fa3ebfa'
            ],
            [
                'provider_name' => 'Business',
                'provider_url' => 'http://www.mocky.io/v2/5d47f235330000623fa3ebf7'
            ]
        ];
        foreach ($data as $item){
            Provider::create($item);
        }
    }
}
