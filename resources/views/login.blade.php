<x-layout titlePage="Entrar">
    <main>
        <section>
            <div class="container">
                <form method="POST" action="{{ route('login.auth')}}">
                    @csrf
                    <div>
                        <label for="user">Insira seu usuário</label>
                        <input id="user" type="number" class="border-2">
                        @error('user')
                            <x-form.error message={{ $message }}/>
                        @enderror
                    </div>
                    <div>
                        <label for="password">Insira sua senha</label>
                        <input id="password" type="text" class="border-2">
                        @error('password')
                            <x-form.error message={{ $message }}/>
                        @enderror
                    </div>

                    <button type="submit" class="border cursor-pointer">Entrar</button>
                </form>
            </div>
        </section>
    </main>
</x-layout>
