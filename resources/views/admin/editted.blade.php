<x-dmasters title="Lupa">
        <!-- Main content -->
        <div class="col-span-5">
            <main class="h-full">
                <div class="container px-6">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Approval Joinning Carrier
                    </h2>
                    <!-- Cards and content -->
                    <div class="grid gap-4 mb-8 md:grid-cols-2 xl:grid-cols-4">
                        <!-- Card items -->
                        @foreach($carriers as $carrier)
                        <div class="flex items-center px-4 py-2 bg-gray-50 rounded-lg shadow-xs dark:bg-gray-800">

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
                              <a href="{{ route('admin.submit.moreEdittedInformation', $carrier) }}">
                              <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                 {{ $carrier->name_position }}
                              </p>
                            </a>
                              <p class="text-lg font-semibold text-gray-700 dark:text-gray-200" >
                                  {{ $carrier->submits->count() }}
                              </p>
                            </div>
                       
                        </div>
                        @endforeach

                        </div>
                      </div>
                </div>
            </main>
        </div>
</x-dmasters>
