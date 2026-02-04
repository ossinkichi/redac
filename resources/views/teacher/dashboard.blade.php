<x-layout>
    <main>

        @foreach ($rooms as $room)
            <div class="card">
                <ul>
                    <li>Ano:</li>
                    <li>Curso:</li>
                    <li>Turno:</li>
                    <li>Sala:</li>
                </ul>
            </div>
        @endforeach

    </main>
</x-layout>
