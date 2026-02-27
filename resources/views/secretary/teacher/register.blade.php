@props([
    'subjects' => [],
])

<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] mx-auto">
        <section>
            <div>
                <form method="POST" action="{{ route('teacher.store') }}"
                    class="grid grid-cols-2 gap-6 fieldset bg-base-200 border-base-300 rounded-box border p-6 shadow-md">
                    @csrf
                    <p class="text-center text-2xl font-bold col-span-2">Registrar um novo professor</p>

                    <div class="col-span-2">
                        <x-form.input label="Nome completo" placeholder="Nome completo" name="full_name" />
                        @error('full_name')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-form.input label="cpf" placeholder="000.000.000-00" name="cpf" />
                        @error('cpf')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-form.input label="Email" placeholder="email@dominio.com" name="email" />
                        @error('email')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-form.input label="Telefone" placeholder="(99) 99999-9999" name="phone_number" />
                        @error('phone_number')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <x-form.input label="Endereço" name="address" placeholder="Rua, número, bairro, cidade" />
                        @error('address')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <label class="select">
                            <span class="label">Matéria</span>
                            <select name="subject_id" required>
                                <option disabled selected>Escolher matéria</option>
                                @if ($subjects)
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject['id'] }}">{{ $subject['name'] }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </label>
                        @error('specialization_subject_id')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <x-form.gender-input />
                        @error('gender')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <x-form.dateofbirth-input />
                        @error('date_of_birth')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <x-form.input type="hidden" name="role" value="teacher" />
                    <button class="btn btn-neutral col-span-2">Registrar</button>
                </form>
            </div>
        </section>
    </main>
</x-layout>
