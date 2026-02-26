@props(['students' => []])
<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] m-auto p-4 w-screen">
        <section>
            <div class="overflow-x-auto w-full">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Matriculas</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Contato</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($students) == 0)
                        <tr>
                            <td colspan="5" class="text-gray-500 text-center">Nenhum(a) aluno(a) encontrado(a)</td>
                        </tr>
                        @else
                        @foreach ($students as $student)
                            <x-card.student :student="$student" />
                            <th>
                                <div>
                                    <a href="#" class="btn btn-success btn-xs rounded-box">Adicionar</a>
                                    @if ($student['room'] == $room)
                                        <a href="#" class="btn btn-error btn-xs rounded-box">Retirar</a>
                                    @endif
                                </div>
                            </th>
                        @endforeach
                        @endif
                    </tbody>

                </table>
            </div>
        </section>
    </main>
</x-layout>
