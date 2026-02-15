@props([
    'courses' => [
        (object) [
            'id' => '1',
            'name' => 'Informatica',
            'description' => 'Descrição da Sala 1',
        ],
        (object) [
            'id' => '2',
            'name' => 'enfermagem',
            'description' => 'Descrição da Sala 2',
        ],
        (object) [
            'id' => '3',
            'name' => 'Sala 3',
            'description' => 'Descrição da Sala 3',
        ],
        (object) [
            'id' => '4',
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
                    <h1 class="col-span-3 font-extrabold text-xl mb-5">Cursos</h1>
                    @if ($courses == [])
                        <span>Nenhum curso encontrado</span>
                    @else
                        @foreach ($courses as $course)
                            <x-card.course :course="$course" />
                        @endforeach

                    @endif
                </div>
            </div>
        </section>
    </main>
</x-layout>
