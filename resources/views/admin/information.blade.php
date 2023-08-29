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
                            {{-- <th class="px-4 py-3">Carrier</th> --}}
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Phone</th>
                            {{-- <th class="px-4 py-3">File CV</th> --}}
                            <th class="px-4 py-3">Created At</th>
                            <th class="px-4 py-3">Approval</th>
                          </tr>
                        </thead>
                        @foreach($carriers as $carrier)

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
                                  <p class="font-semibold">{{ $carrier->user->name }}</p>
                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                    {{ $carrier->identifier }}
                                  </p>
                                </div>
                              </div>
                            </td>
                            
                           
                            <td class="px-4 py-3 text-sm">
                              {{ $carrier->email }}
                            </td>

                            <td class="px-4 py-3 text-sm">
                                {{ $carrier->phone }}
                              </td>

                              <td class="px-4 py-3 text-sm">
                                {{ $carrier->created_at->format('d F,Y') }}
                              </td>

                              <td class="px-4 py-3 text-xs">
                                <div class="flex">
                                  {{-- <span
                                  class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                > --}}
                                <p>@if($carrier->status)
                                  {{ $carrier->status->statuses }}
                                  @endif
                                </p>
                                <p>
                                  <form action="{{ route('admin.submit.update', $carrier) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <select class="border rounded-lg py-2" name="status_id" id="">
                                      @foreach($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->statuses }}</option>
                                      @endforeach
                                    </select>
                                    <button type="submit">Submit Approval</button>
                                  </form>
                                </p>
                                   
                                </span>
                                </div>
                              
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
