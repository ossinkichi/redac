@props(['subjects'])

<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] m-auto w-screen grid grid-cols-2 gap-3">
        <section>
            <div class="w-full px-7">
                <h2 class="font-bold text-xl mb-5">Registrar Matéria</h2>
                <div class="w-full p-6 bg-base-200 rounded-lg shadow-sm">
                    <form action="{{ route('subject.store') }}" method="POST" class="flex flex-col gap-4">
                        @csrf
                        <div>
                            <x-form.input name="name" placeholder="Nome da matéria" label="Nome da matéria" />
                            @error('name')
                                <x-form.error :message="$message"/>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-neutral">Registrar</button>
                    </form>
                </div>
            </div>
        </section>
        <aside>
            <div class="w-full">
                <h2 class="font-bold text-xl mb-5">Registrar Matéria</h2>
                <div class="overflow-y-auto max-h-[450px] p-6">
                    <ul class="list bg-base-100 rounded-box flex gap-4">
                        @if (count($subjects) == 0)
                            <li class="text-gray-500 col-span-3">Nenhuma matéria registrada</li>
                        @else
                            @foreach ($subjects as $subject)
                                <li class="list-row shadow-md">{{ $subject['name'] }}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </aside>
    </main>
</x-layout>
