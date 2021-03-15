<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
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
                'name' => 'Carry',
                'address' => 'Juggernaut',
                'phone' => '0909090909090',
                'capitalization' => 40000,
                'loan' => 30000
            ],
            [
                'name' => 'Midlaner',
                'address' => 'Invoker',
                'phone' => '09090909',
                'capitalization' => 30000,
                'loan' => 200000
            ],
            [
                'name' => 'Support',
                'address' => 'Ogre',
                'phone' => '09090956565',
                'capitalization' => 40000,
                'loan' => 400000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
