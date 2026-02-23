@props([
    'course'
])

<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] mx-auto">
        <section>
            <div>
                <form method="POST" action="{{ route('room.store') }}"
                    class="flex flex-col gap-6 fieldset bg-base-200 border-base-300 rounded-box border p-6 shadow-md">
                    @csrf
                    <p class="text-center text-2xl font-bold">Registrar uma nova turma</p>

                    <div>
                        <x-form.input type="number" name="series" label="Série" placeholder="Ex: 1, 2, 3..." />
                        @error('series')
                            <x-form.error :message="$message" />
                    @enderror
                    </div>

                    <div>
                        <x-form.input type="text" name="identification" label="Sala" placeholder="Ex: 1, A..." />
                        @error('identification')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <label class="select">
                            <span class="label">Turno</span>
                            <select name="shift">
                                <option disabled selected>Escolher Turno</option>
                                <option value="matutino">Matutino</option>
                                <option value="vespertino">Vespertino</option>
                                <option value="noturno">Noturno</option>
                            </select>
                        </label>

                        @error('shift')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <x-form.input type="hidden" name="course" :value="$course" />
                    <button class="btn btn-neutral">Registrar</button>
                </form>
            </div>
        </section>
    </main>
</x-layout>
