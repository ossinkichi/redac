@props([
    'subjects' => [],
])

<label class="select">
    <span class="label">Cargo</span>
    <select>
        @if (!$subjects)
            <option>Nenhuma materia</option>
        @else
            @foreach ($subjects as $subject)
                <option>{{ $subjects['name'] }}</option>
            @endforeach
        @endif
    </select>
</label>
