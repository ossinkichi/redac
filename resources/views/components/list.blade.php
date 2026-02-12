@props([
    'items' => [],
    'key' => ''
])

<ul>
    @foreach ($items as $item)
        <li class="text-sm font-medium wrap-normal">{{ $item[$key] }}</li>
    @endforeach
</ul>
