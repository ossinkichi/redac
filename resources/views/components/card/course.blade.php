@props([
    'course'
])

<div class="card card-border bg-base-100 w-96 shadow-sm shadow-slate-500">
    <div class="card-body">
        <h2 class="card-title mb-2">{{ $course->name }}</h2>
        <p class="mb-4">{{ $course->description }}</p>
        <div class="card-actions justify-end">
            <a href="{{ route('secretary.rooms', $course->name) }}" class="btn btn-info text-white">
                Acessar
            </a>
        </div>
    </div>
</div>
