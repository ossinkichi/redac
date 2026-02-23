<x-layout title=" - Entrar em sua conta">
    <header class="navbar bg-base-200 shadow-sm p-4 row-span-1 h-[70px]">
        <span class="text-xl font-bold text-warning">Redac</span>
    </header>

    <main>
        <section>
            <div class="mt-20">
                <form method="POST" action="{{ route('login.auth') }}"
                    class="flex flex-col gap-6 m-auto fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6 shadow-md">
                    @csrf
                    <p class="text-center text-2xl font-bold">Entre em sua conta</p>
                    <div>
                        <x-form.user-input />
                        @error('user')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <x-form.password-input />
                        @error('password')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <div class="mx-auto">
                        @error('auth')
                            <x-form.error :message="$message" />
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-neutral text-slate-50">Entrar</button>
                </form>
            </div>
        </section>
    </main>

</x-layout>
