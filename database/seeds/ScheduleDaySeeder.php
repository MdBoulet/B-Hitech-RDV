<?php

use App\Models\ScheduleDay;
use Illuminate\Database\Seeder;

class ScheduleDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = [
            [
                'day' => 'Monday', 'start_time' => '08:00', 'end_time' => '16:00'
            ],
            [
                'day' => 'Tuesday', 'start_time' => '08:00', 'end_time' => '16:00'
            ],
            [
                'day' => 'Wednesday', 'start_time' => '08:00', 'end_time' => '16:00'
            ],
            [
                'day' => 'Thursday', 'start_time' => '08:00', 'end_time' => '16:00'
            ],
            [
                'day' => 'Friday', 'start_time' => '08:00', 'end_time' => '16:00'
            ],
            [
                'day' => 'Saturday', 'start_time' => '08:00', 'end_time' => '14:00'
            ],
        ];

        ScheduleDay::query()->insert($days);
    }
}
