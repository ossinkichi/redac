@props([
    'rooms' => [
        // [
        //     'id' => 1,
        //     'series' => 2,
        //     'course' => 'Informatica',
        //     'shift' => 'matutino',
        //     'identification' => 2,
        //     'status' => true,
        //     'teachers' => [],
        //     'students' => [],
        // ],
        // [
        //     'id' => 1,
        //     'series' => 2,
        //     'course' => 'Informatica',
        //     'shift' => 'matutino',
        //     'identification' => 2,
        //     'status' => true,
        //     'teachers' => [],
        //     'students' => [],
        // ],
        // [
        //     'id' => 1,
        //     'series' => 2,
        //     'course' => 'Informatica',
        //     'shift' => 'matutino',
        //     'identification' => 2,
        //     'status' => true,
        //     'teachers' => [],
        //     'students' => [],
        // ],
        // [
        //     'id' => 1,
        //     'series' => 2,
        //     'course' => 'Informatica',
        //     'shift' => 'matutino',
        //     'identification' => 2,
        //     'status' => false,
        //     'teachers' => [],
        //     'students' => [],
        // ],
    ],
])

<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] mx-auto w-screen">
        <section>
            <div class="w-full p-2">
                <div class="flex flex-row justify-between">
                    <h2 class="text-2xl font-bold">Turmas</h2>
                    <a href="{{ route('secretary.room.register',$course) }}"
                        class="btn btn-base-200 border-base-300 shadow-sm rounded-sm">Adicionar sala</a>
                </div>
                <ul class="list bg-base-100 rounded-box grid grid-cols-3 gap-4">
                    @if (count($rooms) == 0)
                        <p class="text-gray-500 col-span-3">Nenhuma turma encontrada.</p>
                    @else
                        @foreach ($rooms as $room)
                            <x-card.room :room="$room" />
                        @endforeach
                    @endif
                </ul>
            </div>
        </section>
    </main>
</x-layout>
