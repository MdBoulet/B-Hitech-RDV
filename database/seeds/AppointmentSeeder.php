<?php

use App\Models\Appointment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointments = [];

        $timesRange = [
            ['08:00', '08:30'],['08:30', '09:00'],['09:00', '09:30'],['09:30', '10:00'],['10:00', '10:30'],
            ['10:30', '11:00'],['11:00', '11:30'],['11:30', '12:00'],['12:00', '12:30'],['12:30', '13:00'],
            ['13:00', '13:30'],['13:30', '14:00'],['14:00', '14:30'],['14:30', '15:00'],['15:00', '15:30'],
            ['15:30', '16:00']
        ];
        foreach (range(1, 10) as $value) {
            $date = Date::create('2022-11-07 08:00');
            $times = $timesRange[rand(0, 15)];
            $appointments[] = [
                'commune_id' => rand(1, 5),
                'date' => $date->addDays(rand(1, 10)),
                'start_time' => $times[0],
                'end_time' => $times[1],
            ];
        }

        Appointment::query()->insert($appointments);
    }
}
