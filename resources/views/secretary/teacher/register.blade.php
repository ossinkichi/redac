<x-layout>
    <x-secretary.header />

    <main class="max-w-[1200px]">
        <section class="w-screen">
            <div class="">
                <form method="POST" action="{{ route('secretary.teacher.store') }}"
                    class="flex flex-col gap-6 m-auto fieldset bg-base-200 border-base-300 rounded-box w-md border p-6 shadow-md">
                    @csrf

                    <x-form.input label="Nome completo" placeholder="Nome completo" name="full_name" />

                    <x-form.input label="cpf" />

                    <x-form.input label="Email" />

                    <x-form.input label="Telefone" />

                    <x-secretary.form.subjects />

                    <div>
                        <div>
                            <x-form.gender-input />
                        </div>
                        <div>
                            <x-form.date-input />
                        </div>
                    </div>
                    <button class="btn btn-neutral">Registrar</button>
                </form>
            </div>
        </section>
    </main>
</x-layout>
