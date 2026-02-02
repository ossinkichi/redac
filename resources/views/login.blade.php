<x-layout>
    <main>
        <section>
            <div class="mt-40">
                <form method="POST" action="{{ route('login.auth')}}" class="flex flex-col gap-6 m-auto fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6">
                    @csrf
                    <p class="text-center text-2xl font-bold text-warning">Entre em sua conta</p>
                    <div>
                        <x-form.user-input />
                        @error('user')
                            <x-form.error message={{ $message }}/>
                        @enderror
                    </div>
                    <div>
                        <x-form.password-input/>
                        @error('password')
                            <x-form.error message={{ $message }}/>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning">Entrar</button>
                </form>
            </div>
        </section>
    </main>
</x-layout>
