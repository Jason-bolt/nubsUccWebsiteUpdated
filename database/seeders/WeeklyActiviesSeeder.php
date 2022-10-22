<?php

namespace Database\Seeders;

use App\Models\WeeklyActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeeklyActiviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weekly_activities')->insert([
            [
                'service' => "prayer force",
                'day' => "monday",
                'time' => "6pm to 8pm",
                'location_id' => 3
            ],
            [
                'service' => "midweek service",
                'day' => "thursdays",
                'time' => "6pm to 8pm",
                'location_id' => 2
            ],
            [
                'service' => "sunday service",
                'day' => "sunday",
                'time' => "9am to 11:30am",
                'location_id' => 1
            ],
        ]);
    }
}
