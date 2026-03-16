@props([
    'rooms' => [],
    'course' => [],
])

<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] mx-auto w-screen">
        <section>
            <div class="w-full p-2">
                <div class="flex flex-row justify-between">
                    <h2 class="text-2xl font-bold">Turmas</h2>
                    <a href="{{ route('secretary.room.register', $course) }}"
                        class="btn btn-base-200 border-base-300 shadow-sm rounded-sm">Adicionar sala</a>
                </div>
                <ul class="list bg-base-100 rounded-box grid grid-cols-3 gap-4">
                    @if (count($rooms) == 0)
                        <p class="text-gray-500 col-span-3">Nenhuma turma encontrada.</p>
                    @else
                        @foreach ($rooms as $room)
                            <x-card.room :room="$room" :course="$course" :route="{{ route('secretary.room.show', [$room, $course]) }}" />
                        @endforeach
                    @endif
                </ul>
            </div>
        </section>
    </main>
</x-layout>
