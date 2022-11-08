<?php

use App\Models\Appointment;
use App\Models\ScheduleDay;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

/*function getBusyDates($communeId): array
{
    $appointmentsMinutes = 30;
    $days = ScheduleDay::all()->map(function ($item) use ($appointmentsMinutes) {
        $daysMinutes = Date::create($item->start_time)->diffInMinutes($item->end_time);
        $item->nb_appointments = $daysMinutes / $appointmentsMinutes;
        return $item;
    })->pluck('nb_appointments', 'day');

    return Appointment::query()
        ->selectRaw('count(*) count, date, dayname(date) day, start_time time')
        ->where('commune_id', $communeId)
        ->whereDate('date', '>=', date('Y-m-d'))
        ->groupBy('date')->get()
        ->filter(function ($item) use ($days) {
        if (isset($days[$item->day]) && $item->count >= $days[$item->day])
            return $item;
    })->pluck('date')->toArray();
}*/

function getWeekdays(): array
{
    $today = Date::today();
    $week_number = $today->week;
    $year = $today->year;
    $weekdays = [];
    for($day=1; $day<=7; $day++)
    {
        $weekdays[] = date('Y-m-d', strtotime($year."W".$week_number.$day));
    }
    return $weekdays;
}

function getDayTimesRange($startTime = '08:00', $endTime = '16:00', $appointmentTime = 30): array
{
    $time = explode(':', $startTime);
    $date = Date::today()->setHour($time[0])->setMinute($time[1]);

    $times = [];
    while ($endTime != $date->format('H:i')) {
        $time = $date->format('H:i');
        $date = $date->addMinutes($appointmentTime);
        $time .= '-'.$date->format('H:i');
        $times[] = $time;
    }
    return $times;
}

function getAvailableDateTimes($communeId = null)
{
    $availableDates = array_fill_keys(getDayTimesRange(), array_fill_keys(getWeekdays(), null));
    if ($communeId) {
        return Appointment::query()
            ->whereIn('date', getWeekdays())->where('commune_id', $communeId)->get()
            ->map(function ($item) {
                $item->time = Str::beforeLast($item->start_time, ':').'-'.Str::beforeLast($item->end_time, ':');
                return $item;
            })->groupBy('date')
            ->reduce(function ($availableDates, $data, $key) {
                $busyTimes = $data->pluck('time')->unique()->sort()->toArray();
                //$date = Date::create($key);
                //$day = ScheduleDay::query()->where('day', $date->dayName)->get();
                foreach (getDayTimesRange() as $time) {
                    if (!in_array($time, $busyTimes))
                        $availableDates[$time][$key] = $time;
                }
                return $availableDates;
            }, $availableDates);
    } else {
        return $availableDates;
    }
}
