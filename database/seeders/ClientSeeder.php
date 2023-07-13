<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Salutan',
                'first_name' => 'John Emanuelle',
                'middle_name' => 'Resaba',
                'address' => 'Sitio Mahayahay Bunacan, Tubigon, Bohol',
                'birth_date' => '2002-05-01',
                'phone_number' => '09087446995',
                'email' => 'salutanemanuelle@gmail.com',
                'initial_deposit' => '200000',
            ],
            
        ];

        foreach($cl as $c) {
            Client::create($c);
        }

    }
}
