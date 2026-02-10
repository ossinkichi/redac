@props([
    'teachers' => [],
    'students' => []
])

<x-layout>
    <main>
        <div></div>
    </main>
    <aside>
        <div class="">
            <ul>
                @foreach ($teachers as $teacher)
                    <li>{{ $teacher['full_name'] }}</li>
                @endforeach
            </ul>
        </div>
        <div class="">
            <ul>
                @foreach ($students as $student)
                    <li>{{ $student['full_name'] }}</li>
                @endforeach
            </ul>
        </div>
    </aside>
</x-layout>
