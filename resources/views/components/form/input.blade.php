@props([
    'label'
])

<label class="floating-label">
    <input type="text" placeholder="Extra Small" class="input input-md" />
    <span>{{ $label }}</span>
</label>
