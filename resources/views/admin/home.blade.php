<x-dmasters title="Lupa">
        <!-- Main content -->
        <div class="col-span-5">
            <main class="h-full">
                <div class="container px-6">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Dashboard
                    </h2>
                    <!-- Cards and content -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                        <!-- Card items -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                                ></path>
                            </svg>
                            </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                               Total Approval Joinning
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200" >
                                {{ $submits->count() }}
                            </p>
                            </div>
                        </div>
                        </div>
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                          <table class="w-full whitespace-no-wrap">
                            <thead>
                              <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                              >
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Carrier</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Phone</th>
                                <th class="px-4 py-3">File CV</th>
                                <th class="px-4 py-3">Created At</th>
                                <th class="px-4 py-3">Approval</th>
                              </tr>
                            </thead>
                            @foreach($submits as $submit)

                            <tbody
                              class="bg-gray-100 divide-y dark:divide-gray-700 dark:bg-gray-800"
                            >
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                  <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div
                                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                    >
                                      <img
                                        class="object-cover w-full h-full rounded-full"
                                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                        alt=""
                                        loading="lazy"
                                      />
                                      <div
                                        class="absolute inset-0 rounded-full shadow-inner"
                                        aria-hidden="true"
                                      ></div>
                                    </div>
                                    <div>
                                      <p class="font-semibold">{{ $submit->user->name }}</p>
                                      <p class="text-xs text-gray-600 dark:text-gray-400">
                                        {{ $submit->identifier }}
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $submit->carrier->name_position }}
                                </td>
                               
                                <td class="px-4 py-3 text-sm">
                                  {{ $submit->email }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    {{ $submit->phone }}
                                  </td>

                                  <td class="px-4 py-3 text-sm">
                                    {{ $submit->file_cv }}
                                  </td>

                                  <td class="px-4 py-3 text-sm">
                                    {{ $submit->created_at }}
                                  </td>

                                  <td class="px-4 py-3 text-xs">
                                  
                                    @if($submit->status_id == '1')
                                    <span
                                    class="px-2 py-1 font-semibold leading-tight text-black bg-red-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                  >
                                      {{ $submit->status->statuses }}
                                    </span>
                                    @elseif($submit->status_id == '2')
                                    <span
                                    class="px-2 py-1 font-semibold leading-tight text-white bg-pink-600 rounded-full dark:bg-green-700 dark:text-green-100"
                                  >
                                      {{ $submit->status->statuses }}
                                    </span>
                                    @elseif($submit->status_id == '3')
                                    <span
                                    class="px-2 py-1 font-semibold leading-tight text-black bg-green-200 rounded-full dark:bg-green-700 dark:text-green-100"
                                  >
                                      {{ $submit->status->statuses }}
                                    </span>
                                    @elseif($submit->status_id == '4')
                                    <span
                                    class="px-2 py-1 font-semibold leading-tight text-white bg-green-900 rounded-full dark:bg-green-700 dark:text-green-100"
                                  >
                                      {{ $submit->status->statuses }}
                                    </span>
                                    @endif
                                  </td>
                              </tr>
                            </tbody>
                            @endforeach

                        </table>
                      </div>
                </div>
            </main>
        </div>
    </div>
</x-dmasters>
