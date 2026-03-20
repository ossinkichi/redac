@props([
    'teachers' => [
        [
            'full_name' => 'Franchesca carvalho',
        ],
    ],
    'students' => [
        [
            'full_name' => 'Franchesco carvalho',
        ],
    ],
])

<x-layout>
    <x-student.header />

    <main>
        <div>
            <div class="card w-96 bg-base-100 shadow-sm">
                <div class="card-body">
                    <span class="card-title">Titulo do card</span>
                </div>
            </div>
        </div>
    </main>
    <aside class="flex flex-col gap-4">
        <div>
            <span class="text-sm font-bold">Professores:</span>
            <x-list :items="$teachers" key="full_name" />
        </div>
        <div>
            <span class="text-sm font-bold">Alunos:</span>
            <x-list :items="$students" key="full_name" />
        </div>
    </aside>
</x-layout>
