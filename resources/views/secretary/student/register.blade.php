@props([
    'courses' => [],
    'rooms' => [],
])
<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] mx-auto">
        <section>
            <form method="POST" action="{{ route('student.store') }}"
                class="grid grid-cols-2 flex-col gap-6 m-auto fieldset bg-base-200 border-base-300 rounded-box border p-6">
                @csrf
                <p class="text-center text-2xl font-bold col-span-2">Registrar um novo aluno</p>

                <div class="col-span-2">
                    <x-form.input label="Nome completo" name="full_name" placeholder="Nome completo" />
                    @error('full_name')
                        <x-form.error :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-form.input label="Email" name="email" placeholder="email@dominio.com" />
                    @error('email')
                        <x-form.error :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-form.input label="matricula" name="registration" placeholder="0000000000" />
                    @error('registration')
                        <x-form.error :message="$message" />
                    @enderror
                </div>
                <div>
                    <x-form.input label="cpf" name="cpf" placeholder="000.000.000-00" />
                    @error('cpf')
                        <x-form.error :message="$message" />
                    @enderror
                </div>

                <div>
                    <x-form.input label="Telefone" name="phone_number" placeholder="(99) 99999-9999" />
                    @error('phone_number')
                        <x-form.error :message="$message" />
                    @enderror
                </div>

                <div class="col-span-2">
                    <x-form.input label="Endereço" name="address" placeholder="Rua, número, bairro, cidade" />
                    @error('address')
                        <x-form.error :message="$message" />
                    @enderror
                </div>
                <div class="row-start-6">
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

                <div>
                    <label class="select">
                        <span class="label">Curso</span>
                        <select name="class_id">
                            <option disabled selected>Selicione o curso</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course['id'] }}">{{ $course['name'] }}</option>
                            @endforeach
                        </select>
                    </label>
                    @error('course_id')
                        <x-form.error :message="$message" />
                    @enderror
                </div>
                <div>
                    <label class="select">
                        <span class="label">Turma</span>
                        <select name="class_id">
                            <option disabled selected>Selicione a tuma</option>
                            @foreach ($rooms as $room)
                                <option value="{{ $room['id'] }}">{{ $room['name'] }}</option>
                            @endforeach
                        </select>
                    </label>
                    @error('room_id')
                        <x-form.error :message="$message" />
                    @enderror
                </div>
                <div>
                    <label class="label">
                        <input type="checkbox" name="formed" class="checkbox checkbox-primary" />
                        <p class="font-bold">Este aluno está formado</p>
                    </label>
                </div>
                <x-form.input type="hidden" name="role" value="student" />

                <button class="btn btn-neutral col-span-2">Registrar</button>
            </form>
        </section>
    </main>
</x-layout>
