<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class SetAppointmentField extends Carbon
{
    public function __construct($time = null, $tz = null)
    {
        parent::__construct($time, $tz);

    }

    public function getBusiedDates()
    {


    }
}
