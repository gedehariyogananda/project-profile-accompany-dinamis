<x-dmasters title="Carrier">

    <div class="col-span-5">
    <main class="h-full pb-16 ">
        <div class="container px-6 mx-auto grid">
          <div class="mt-5 px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="grid grid-cols-2 gap-4 ">
              @foreach($carriers as $carrier)
              <div class="grid-span-1 text-center">
                      <div class="border rounded-xl mb-3">
                          <div class="text-center">
                              <h1 class="text-2xl font-semibold">{{ $carrier->name_position }}</h1>
                              <img class="mx-auto mt-3" src="{{ asset('storage/' . $carrier->img) }}" alt="{{ $carrier->name_position }}">
                              <div class="my-4">
                                  <a class="px-10 py-2 bg-gray-700 text-white rounded-xl" href="">Entry Editted</a>
                              </div>
                              <h5>Deadline : {{ $carrier->tenggat }}</h5> 
                          </div>
                      </div>
          </div>
          @endforeach

        </div>

        <hr>
          <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
          >
            Sign Carier
        </h2>
          <!-- General elements -->
          <h4
            class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
          >
            Form Make it
          </h4>
          <form action="{{ route('admin.carrier.store') }}" method="post" enctype="multipart/form-data">
            @csrf

          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Name Position</span>
              <input name="name_position" type="text"
                class="block w-full mt-1 border rounded-xl py-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
            </label>
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Syarat 1</span>
                <input name="syarat1" type="text"
                  class="block w-full mt-1 border rounded-xl py-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                />
             </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Syarat 2</span>
                <input name="syarat2" type="text"
                  class="block w-full mt-1 border rounded-xl py-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                />
             </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Syarat 3</span>
                <input name="syarat3" type="text"
                  class="block w-full mt-1 border rounded-xl py-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                />
             </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Syarat 4</span>
                <input name="syarat4" type="text"
                  class="block w-full mt-1 border rounded-xl py-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                />
             </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Syarat 5</span>
                <input name="syarat5"
                  class="block w-full mt-1 border rounded-xl py-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
             </label>

             <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Tenggat</span>
                <input name="tenggat" type="date"
                  class="block w-full mt-1 border rounded-xl py-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
             </label>

             <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">img Background</span>
                <input name="img" type="file"
                  class="block w-full mt-1 border rounded-xl py-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
             </label>
             <button class="px-3 py-2 bg-gray-200 mt-2 rounded-xl" type="submit">Submitted</button>
          </div>
        </form>
        </div>
      </main>
    </div>

</x-dmasters>
