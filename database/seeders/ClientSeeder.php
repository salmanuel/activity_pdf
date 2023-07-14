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
            [
                'last_name' => 'Salutan',
                'first_name' => 'John Emanuelle',
                'middle_name' => 'Resaba',
                'address' => 'Sitio Mahayahay Bunacan, Tubigon, Bohol',
                'birth_date' => '2002-05-01',
                'phone_number' => '09087446995',
                'email' => 'emanuelle21latina@gmail.com',
                'initial_deposit' => '200000',
            ],
            [
                'last_name' => 'Pongase',
                'first_name' => 'John Ivan',
                'middle_name' => 'Sumipo',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-06-09',
                'phone_number' => '09087446995',
                'email' => 'sumipo231@gmail.com',
                'initial_deposit' => '200000',
            ],
        ];

        foreach($cl as $c) {
            Client::create($c);
        }

    }
}
