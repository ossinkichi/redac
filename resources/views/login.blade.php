<x-layout>
    <main>
        <section>
            <div class="container">
                <form method="POST" action="{{ route('login.auth')}}">
                    @csrf
                    <div>
                        <label for="user">Insira seu usuário</label>
                        <input id="user" type="text" class="border-2">
                        @error('user')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password">Insira sua senha</label>
                        <input id="password" type="text" class="border-2">
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="border cursor-pointer">Entrar</button>
                </form>
            </div>
        </section>
    </main>
</x-layout>
