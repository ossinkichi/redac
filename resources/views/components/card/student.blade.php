<tr class="{{ $student['is_active'] ? '' : 'text-error' }}">
    <th>
{{-- <label>
<input type="checkbox" class="checkbox" />
</label> --}}
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
        {{ $student['address'] }}
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
    <th>
        <a class="btn btn-ghost btn-xs rounded-box">detalhes</a>
    </th>
</tr>
