<x-layout title="- Adicionar novo curso">
    <x-secretary.header />

    <main class="max-w-[1200px]">
        <section class="w-screen">
            <div class="w-full p-6">
                <x-form.form label="name" method="POST" route="{{ route('course.store') }}">
                    @csrf
                    <p class="text-center font-bold text-2xl">Novo curso</p>
                    <div>
                        <x-form.input placeholder="Nome do curso" label="Nome do curso" name="name"/>
                        @error('name')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>
                    <div class="">
                        <textarea name="description" placeholder="Descrição do curso" class="textarea textarea-md"></textarea>
                    </div>
                    <button class="btn btn-neutral">Registrar</button>
                </x-form.form>
            </div>
        </section>
    </main>
</x-layout>
