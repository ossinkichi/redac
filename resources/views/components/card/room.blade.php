@props(['room'])

<a href="#">
    <li class="list-row shadow">
        <div>
            <p class="font-bold">{{ $room['series'] }} ano de {{ $room['course'] }}, sala {{ $room['identification'] }}
            </p>
            <p class="text-xs uppercase font-semibold opacity-60"></p>
            <p class="text-xs uppercase font-semibold opacity-60">{{ $room['shift'] }}</p>
        </div>
        <div class="flex flex-row items-center justify-end gap-1">
            <div class="status {{ $room['status'] ? 'status-success' : 'status-neutral' }}"></div>
            <p class="text-xs uppercase font-semibold opacity-60 {{ $room['status'] ? 'text-success' : 'text-neutral' }}">{{ $room['status'] ? 'Ativa' : 'Inativa' }}</p>
        </div>
    </li>
</a>
