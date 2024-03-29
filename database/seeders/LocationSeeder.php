<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            [
                'location' => "assembly hall",
            ],
            [
                'location' => "new life baptist church",
            ],
            [
                'location' => "casford field",
            ],
            [
                'location' => "crt (top)",
            ],
            [
                'location' => "crt (down)",
            ]
        ]);
    }
}
