@props([
    'rooms' => [
        [
            'id' => 1,
            'series' => 2,
            'course' => 'Informatica',
            'shift' => 'matutino',
            'identification' => 2,
            'status' => true,
            'teachers' => [],
            'students' => []
        ],
        [
            'id' => 1,
            'series' => 2,
            'course' => 'Informatica',
            'shift' => 'matutino',
            'identification' => 2,
            'status' => true,
            'teachers' => [],
            'students' => []
        ],
        [
            'id' => 1,
            'series' => 2,
            'course' => 'Informatica',
            'shift' => 'matutino',
            'identification' => 2,
            'status' => true,
            'teachers' => [],
            'students' => []
        ],
        [
            'id' => 1,
            'series' => 2,
            'course' => 'Informatica',
            'shift' => 'matutino',
            'identification' => 2,
            'status' => false,
            'teachers' => [],
            'students' => []
        ],
    ],
])

<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] mx-auto w-screen">
        <section>
            <div class="w-full p-2">
                <ul class="list bg-base-100 rounded-box grid grid-cols-3 gap-4">
                    @foreach ($rooms as $room)
                        <x-card.room :room="$room" />
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
</x-layout>
