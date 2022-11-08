<table class="table table-sm table-striped table-hover">
    <thead>
    <tr class="yui-dt-first yui-dt-last yui-dt-liner">
        <th scope="col" id="horaire" style="width: 23%">Horaire</th>
        @foreach(getWeekdays() as $day)
            @php($date = \Illuminate\Support\Facades\Date::create($day))
            <th scope="col" style="width: 11%; text-align: center;">
                {{ ucfirst($date->dayName) }} <br/> {{ $date->format('d/m/Y') }}
            </th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($availableDateTimes as $timeRange => $times)
        <tr>
            @php($timeRange = explode('-', $timeRange))
            <td><span class="no-wrap d-xl-table-cell">De {{ $timeRange[0] }} à {{ $timeRange[1] }}</span></td>
            @foreach($times as $date => $time)
                <td wire:key="{{ $date }}" style="text-align: center;">
                    @if($time && $commune_id)
                    <input type="radio" id="appointment_date" class="form-control" value="{{ $date.' '.$time }}"
                           wire:model="appointment_date" {{-- wire:change="setAppointmentDate({{ $date }}, {{ $ime }})" --}} />
                    @endif
                </td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
