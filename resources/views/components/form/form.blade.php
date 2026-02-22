@props([
    'method',
    'route',
    'wSize' => 'xs',
    'slot'
])

<form method="{{ $method }}" action="{{ $route}}"
    class="flex flex-col gap-6 m-auto fieldset bg-base-200 border-base-300 rounded-box w-{{ $wSize }} border p-6 shadow-md">
    {{ $slot }}
</form>
