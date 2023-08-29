<x-masters title="Show">
    <div class="px-10 py-10 bg-white">
        <h1 class="text-3xl font-sembold text-center">Your Information About {{ $submit->carrier->name_position }} Apply</h1>
    </div>

    <div class="relative overflow-x-auto px-24 py-10">
        <a href="/user/carrier">back</a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Full Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        File CV
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Statuses
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $submit->full_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $submit->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $submit->phone }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $submit->file_cv }}
                    </td>
                    <td class="px-6 py-4">
                        {{-- @if($submit->status != null) --}}
                        @if($submit->status_id == '1')
                        <span
                        class=" text-red-700 font-semibold shadow-sm dark:bg-green-700 dark:text-green-100"
                      >
                          {{ $submit->status->statuses }}
                        </span>
                        @elseif($submit->status_id == '2')
                        <span
                        class=" text-pink-500 font-semibold shadow-sm dark:bg-green-700 dark:text-green-100"
                      >
                          {{ $submit->status->statuses }}
                        </span>
                        @elseif($submit->status_id == '3')
                        <span
                        class=" text-green-800 font-semibold shadow-sm dark:bg-green-700 dark:text-green-100"
                      >
                          {{ $submit->status->statuses }}
                        </span>
                        @elseif($submit->status_id == '4')
                        <span
                        class=" text-green-600 font-semibold shadow-sm dark:bg-green-700 dark:text-green-100"
                      >
                          {{ $submit->status->statuses }}
                        </span>
                        @endif
                        {{-- @endif --}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('user.submit.edit', $submit) }}">Edit</a>
                        
                        <form action="{{ route('user.submit.destroy', $submit) }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-masters>