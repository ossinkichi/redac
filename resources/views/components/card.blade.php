@props([
    'room' => [
        'course' => 'Tecnico de enfermagem',
        'serie' => '1',
        'shift' => 'Vespertino',
        'identification' => '3',
    ],
])

<div class="card card-border bg-base-200 w-96 shadow-sm">
    <div class="card-body">
        <h2 class="card-title">{{ $room['course'] }}</h2>
        <span class="font-semibold">Série: {{ $room['serie'] }}</span>
        <span class="font-semibold">Turno: {{ $room['shift'] }}</span>
        <span class="font-semibold">Sala: {{ $room['identification'] }}</span>
        <div class="card-actions justify-end">
            <button class="w-full btn btn-primary">Acessar</button>
        </div>
    </div>
</div>
