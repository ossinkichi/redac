@props(['students'])
<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] m-auto p-4">
        <section>
            <div class="overflow-x-auto w-full">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Contato</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>

                </table>
            </div>
        </section>
    </main>
</x-layout>
