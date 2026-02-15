@props([
    'slot' => '',
])

<div class="card card-border bg-base-200 w-96 shadow-sm shadow-slate-500">
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
