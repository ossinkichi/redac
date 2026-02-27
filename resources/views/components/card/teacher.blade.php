                                        <tr class="{{ $teacher['is_active'] ? '' : 'text-error' }}">
                                            <th>
                                            </th>
                                            <td>
                                                <div class="flex items-center gap-3">
                                                    <div>
                                                        <div class="font-bold">{{ $teacher['full_name'] }}</div>
                                                        <div class="text-sm opacity-50">
                                                            {{ $teacher['subject']['name'] }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $teacher['address'] }}
                                            </td>
                                            <td>
                                                <div class="flex items-center gap-3">
                                                    <div>
                                                        <div class="font-bold">{{ $teacher['email'] }}</div>
                                                        <div class="text-sm opacity-50">
                                                            {{ $teacher['phone_number'] }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
