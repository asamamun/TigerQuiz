<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PhoneModel::factory(10)->create();

        \App\Models\PhoneModel::factory()->create([
            'name' => '',
            'phone' => '',
        ]);
    }
}
