@props([
    'rooms' => [
        [
            'course' => 'Tecnico de enfermagem',
            'serie' => '1',
            'shift' => 'Vespertino',
            'identification' => '3',
        ],
        [
            'course' => 'Tecnico de enfermagem',
            'serie' => '1',
            'shift' => 'Vespertino',
            'identification' => '1',
        ],
        [
            'course' => 'Tecnico de enfermagem',
            'serie' => '1',
            'shift' => 'Vespertino',
            'identification' => '2',
        ],
    ],
])
<x-layout>
    <x-header />
    <main class="p-4">
        <div class="">

            @foreach ($rooms as $room)
                <x-card />
            @endforeach

        </div>

    </main>
</x-layout>
