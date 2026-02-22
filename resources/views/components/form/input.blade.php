@props([
    'label' => '',
    'type' =>  'text',
    'placeholder' => '',
    'name' => ''
])

<label class="floating-label">
    <input type="{{ $type  }}" placeholder="{{ $placeholder }}" class="input input-md" name="{{ $name }}"/>
    <span>{{ $label }}</span>
</label>
