@props([
    'subjects' => [],
])

<label class="select">
    <span class="label">Matéria</span>
    <select>
        @if (!$subjects)
            <option disabled>Nenhuma materia</option>
        @else
            @foreach ($subjects as $subject)
                <option disabled selected>Escolher matéria</option>
                <option>{{ $subject['name'] }}</option>
            @endforeach
        @endif
    </select>
</label>
