@props([
    'rooms' => [],
])

<x-layout>
    <x-teacher.header />

    <main class="col-span-2 max-w-[1200px] mx-auto w-screen"">
        <section>
            <div class="w-full p-2">
                <div class="grid grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <h2 class="text-2xl col-span-3 font-bold">Turmas</h2>

                    <ul class="list col-span-3 bg-base-100 rounded-box grid grid-cols-3 gap-4">
                        @if ($rooms == [])
                            <span>Nenhuma sala encontrada</span>
                        @else
                            @foreach ($rooms as $room)
                                <x-card.room :room="$room" />
                            @endforeach

                        @endif
                    </ul>
                </div>
            </div>
        </section>
    </main>
</x-layout>
