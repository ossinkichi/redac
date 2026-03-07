@props([
    'course' => [],
    'rooms' => [],
    'subjects' => [],
    'students' => [],
    'teachers' => [],
])

<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] m-auto w-screen p-6">
        <section class="grid grid-cols-2">
            <div>
                <span class="font-extrabold uppercase text-2x1 tracking-wide">Matérias</span>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Matéria</th>
                                <th>Responsavel</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($subjects) == 0)
                                <tr>
                                    <td colspan="2" class="text-center text-sm text-gray-500">Nenhuma matéria
                                        registrada</td>
                                </tr>
                            @else
                                @foreach ($subjects as $subject)
                                    <tr>
                                        <td>{{ $subject['name'] }}</td>
                                        <td>{{ $subject['teacher']['name'] }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr>
                                <td colspan="2" class="text-center text-sm text-gray-500">
                                    <a href="{{ route('secretary.room.listingsubjectsofadded', [$room, $course]) }}" class="btn w-full">Adicionar matéria</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between mb-4">
                    <span class="font-extrabold uppercase text-2x1 tracking-wide">Alunos</span>
                    <a href="{{ route('secretary.room.listingstudentofadded', [$room, $course]) }}"
                        class="btn btn-base-200 border-base-300 shadow-sm rounded-sm self-end">Adicionar Aluno</a>
                </div>
                <div>
                    <table class="table table-sm">
                        @if (count($students) == 0)
                            <span class="text-sm text-gray-500 font-semibold">Nenhum aluno(a) registrado</span>
                        @else
                            @foreach ($students as $student)
                                <x-card.student :student="$student" />
                                <td>
                                    <a href="#{{ $student['id'] }}" class="btn btn-error btn-sm">X</a>
                                </td>
                                </tr>
                            @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </section>
    </main>
</x-layout>
