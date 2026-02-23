@props([
    'label' => '',
    'type' =>  'text',
    'placeholder' => '',
    'name' => '',
    'value' => '',
])

<label class="floating-label">
    <input type="{{ $type  }}" placeholder="{{ $placeholder }}" class="input w-full" name="{{ $name }}" value="{{ $value }}"/>
    <span>{{ $label }}</span>
</label>
