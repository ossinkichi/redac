@props([
    'courses' => [],
])

<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] m-auto w-screen">
        <section>
            <div class="container w-full px-7">
                <div class="col-span-3 flex flex-row justify-between">
                    <h1 class="font-extrabold text-xl mb-5">Cursos</h1>
                    <a href="{{ route('secretary.course.register') }}" class="btn btn-base-200 border-base-300 shadow-sm rounded-sm">Adicionar Curso</a>
                </div>
                <div class="grid grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @if (count($courses) == 0)
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
