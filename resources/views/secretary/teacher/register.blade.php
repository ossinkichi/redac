<x-layout>
    <x-secretary.header />

    <main>
        <form method="POST" action=""
            class="flex flex-col gap-6 m-auto fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6">
            <div>
                <x-form.input label="Nome completo" />
            </div>
            <div>
                <x-form.input label="cpf" />
            </div>
            <div>
                <x-form.input label="Email" />
            </div>
            <div>
                <x-form.input label="Telefone" />
            </div>
            <div>
                <x-secretary.form.subjects />
            </div>
            <div class="">
                <div>
                    <x-secretary.form.gender />
                </div>
                <div>
                    <x-form.date />
                </div>
            </div>
        </form>
    </main>
</x-layout>
