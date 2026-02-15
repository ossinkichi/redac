@props([
    'rooms' => [
        (object) [
            'name' => 'Sala 1',
            'description' => 'Descrição da Sala 1',
        ],
        (object) [
            'name' => 'Sala 2',
            'description' => 'Descrição da Sala 2',
        ],
        (object) [
            'name' => 'Sala 3',
            'description' => 'Descrição da Sala 3',
        ],
        (object) [
            'name' => 'Sala 4',
            'description' => 'Descrição da Sala 4',
        ],
    ],
])

<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] m-auto">
        <section>
            <div class="container w-screen px-7">
                <div class="grid grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <h1 class="col-span-3 font-extrabold text-xl mb-5">Salas</h1>
                    @if ($rooms == [])
                        <span>Nenhuma sala encontrada</span>
                    @else
                        @foreach ($rooms as $room)
                            <x-room.card :room="$room" />
                        @endforeach

                    @endif
                </div>
            </div>
        </section>
    </main>
</x-layout>
