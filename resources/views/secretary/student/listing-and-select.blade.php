@props([
    'students' => [],
    'subjects' => [],
    'teachers' => [],
    'room' => '',
])
<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] m-auto p-4 w-screen">
        <section>
            <div class="mt-20">
                <form action="{{ route('room.subjectandteacher') }}" method="POST"
                    class="flex flex-col gap-6 m-auto fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6 shadow-md">
                    @csrf
                    <p class="text-center text-2xl font-bold">Adicionar matéria</p>
                    <div>
                        <label class="select">
                            <span class="label">Matéria</span>
                            <select name="subject">
                                <option disabled selected>Escolher matéria</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject['id'] }}">{{ $subject['name'] }}</option>
                                @endforeach
                            </select>
                        </label>

                        @error('subject')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <label class="select">
                            <span class="label">Professor(a)</span>
                            <select name="teacher">
                                <option disabled selected>Escolher professor(a)</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher['id'] }}">{{ $teacher['full_name'] }}</option>
                                @endforeach
                            </select>
                        </label>

                        @error('teacher')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <x-form.input type="hidden" name="room" :value="$room" />
                    <button type="submit" class="btn btn-neutral">Salvar></button>
                </form>
            </div>
        </section>
    </main>
</x-layout>
