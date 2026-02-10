@props([
    'room' => [
        'course' => 'Tecnico de enfermagem',
        'serie' => '1',
        'shift' => 'Vespertino',
        'identification' => '3',
    ],
])

<x-layout>
    <x-header />
    <main class="p-6">
        <x-card>
            <h2 class="card-title">{{ $room['course'] }}</h2>
            <span class="font-semibold">Série: {{ $room['serie'] }}</span>
            <span class="font-semibold">Turno: {{ $room['shift'] }}</span>
            <span class="font-semibold">Sala: {{ $room['identification'] }}</span>
            <div class="card-actions justify-end">
                <button class="w-full btn btn-primary">Acessar</button>
            </div>
        </x-card>
    </main>
</x-layout>
