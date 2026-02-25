@props(['students' => []])

<x-layout title="- Lista de alunos">

    <x-secretary.header />

    <main class="max-w-[1200px] m-auto">
        <section>
            <div class="container w-screen px-7">
                <div>
                    <div class="col-span-3 flex flex-row justify-between">
                        <h1 class="font-extrabold text-xl mb-5">Alunos</h1>
                        <a href="{{ route('secretary.aluno.register') }}" class="btn btn-base-200 border-base-300 shadow-sm rounded-sm">Adicionar Aluno</a>
                    </div>
                    @if (count($students) == 0)
                        <span>Nenhum aluno(a) encontrado</span>
                    @else
                        <div class="overflow-x-auto w-full">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nome</th>
                                        <th>Endereço</th>
                                        <th>Contato</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <x-card.student :student="$student" />
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                    @endif
                </div>
            </div>
        </section>
    </main>

</x-layout>
