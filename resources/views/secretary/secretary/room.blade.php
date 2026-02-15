@props([
    'rooms' => [
        [
            'id' => 1,
            'series' => 2,
            'course' => 'Informatica',
            'shift' => 'matutino',
            'identification' => 2,
            'status' => true,
        ],
    ],
])

<x-layout>
    <x-secretary.header />

    <main class="col-span-2 max-w-[1200px] m-auto">
        <section>
            <div class="w-screem">
                <div class="overflow-x-auto">
                    <table class="table table-md">
                        <thead>
                            <tr>
                                <th>Serie</th>
                                <th>Sala</th>
                                <th>Turno</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $room)
                                <tr>
                                    <th>{{ $room['series'] }} ano</th>
                                    <td>{{ $room['identification'] }}</td>
                                    <td>{{ $room['shift'] }}</td>
                                    <td>
                                        <div class="status {{ $room['status'] ? "status-neutral" : "status-success" }}  status-xl w-full"></div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Serie</th>
                                <th>Sala</th>
                                <th>Turno</th>
                                <th>status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </main>
</x-layout>
