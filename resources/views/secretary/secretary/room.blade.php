@props([
    'room' => [
        'id' => 1,
        'series' => 2,
        'course' => 'Informatica',
        'shift' => 'matutino',
        'identification' => 2,
        'status' => true,
        'tachers' => [],
        'students' => [],
        'subjects' => [],
    ],
])

<x-layout title="- Sala do {{ $room['series'] }} ano de {{ $room['course'] }}, sala {{ $room['identification'] }}">

    <x-secretary.header />

    <main>
        <section>

        </section>
    </main>

</x-layout>
