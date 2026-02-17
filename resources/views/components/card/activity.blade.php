@props([
    'activity'
])

<a href="#">
    <li class="list-row shadow">
        <div>
            <p class="font-bold">{{ $activity['title'] }}</p>
            <p class="text-xs uppercase font-semibold opacity-60">{{ $activity['teacher'] }} - {{ $activity['subject'] }}</p>
        </div>
        <div class="flex flex-row items-center justify-end gap-1">
            <span>{{ $activity['created_at'] }}</span>
        </div>
    </li>
</a>
