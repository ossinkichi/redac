@props(['teachers' => []])

<x-layout title="- Professores">

    <x-secretary.header />

    <main class="max-w-[1200px] m-auto">
        <section>
            <div class="container w-screen px-7">
                <div>
                    <div class="col-span-3 flex flex-row justify-between">
                        <h1 class="font-extrabold text-xl mb-5">Professores</h1>
                        <a href="{{ route('secretary.teacher.register') }}" class="btn btn-base-200 border-base-300 shadow-md rounded-sm">Adicionar professor</a>
                    </div>
                    @if (count($teachers) == 0)
                        <span>Nenhum professor(a) encontrado(a)</span>
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
                                    @foreach ($teachers as $teacher)
                                        <tr class="{{ $teacher['is_active'] ? '' : 'text-error' }}">
                                            <th>
                                                {{-- <label>
                                                    <input type="checkbox" class="checkbox" />
                                                </label> --}}
                                            </th>
                                            <td>
                                                <div class="flex items-center gap-3">
                                                    <div>
                                                        <div class="font-bold">{{ $teacher['full_name'] }}</div>
                                                        <div class="text-sm opacity-50">
                                                            {{ $teacher['discipline_specializate']['name'] }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $teacher['address'] }}
                                            </td>
                                            <td>
                                                <div class="flex items-center gap-3">
                                                    <div>
                                                        <div class="font-bold">{{ $teacher['email'] }}</div>
                                                        <div class="text-sm opacity-50">
                                                            {{ $teacher['phone_number'] }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <th>
                                                <a class="btn btn-ghost btn-xs rounded-box">detalhes</a>
                                            </th>
                                        </tr>
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
