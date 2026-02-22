@props([
    'course'
])

<div class="card card-border bg-base-100 w-9/9 h-48 shadow-sm shadow-slate-500">
    <div class="card-body">
        <h2 class="card-title uppercase">{{ $course['name'] }}</h2>
        <p class="mb-4 line-clamp-2">{{ $course['description'] }}</p>
        <div class="card-actions justify-end">
            <a href="{{ route('secretary.rooms', $course['name']) }}" class="btn btn-neutral text-white">
                Acessar
            </a>
        </div>
    </div>
</div>
