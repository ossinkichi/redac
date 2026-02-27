<tr class="{{ $student['is_active'] ? '' : 'text-error' }}">
    <th>
        <div class="font-semibold">{{ $student['registration'] }}</div>
    </th>
    <td>
        <div class="flex items-center gap-3">
            <div>
                <div class="font-bold">{{ $student['full_name'] }}</div>
                <div class="text-sm opacity-50">
                    {{ $student['course']['name'] }}</div>
            </div>
        </div>
    </td>
    <td>
        <div class="flex items-center gap-3">
            <div>
                <div class="font-bold">{{ $student['email'] }}</div>
                <div class="text-sm opacity-50">
                    {{ $student['phone_number'] }}
                </div>
            </div>
        </div>
    </td>
