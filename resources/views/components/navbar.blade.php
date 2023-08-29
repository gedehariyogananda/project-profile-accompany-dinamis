<nav class="flex items-center justify-between flex-wrap bg-white border-b p-3">
  <div class="flex items-center flex-shrink-0 text-dark mx-5 md:mx-32">
      <img src="/img/twist.jpg" class="h-10" alt="pe">
  </div>
  <div class="lg:flex lg:items-center lg:w-auto">
      <div class="text-sm flex lg:flex-grow m-end items-center">
          <a href="#home" class="block mt-2 lg:inline-block lg:mt-0 text-dark hover:underline mr-3 md:mr-4">
              <i class="fas fa-home mr-2"></i> Home
          </a>
          <a href="#service" class="block mt-2 lg:inline-block lg:mt-0 text-dark hover:underline mr-3 md:mr-4">
              <i class="fas fa-cogs mr-2"></i> Service
          </a>
          <a href="#team" class="block mt-2 lg:inline-block lg:mt-0 text-dark hover:underline mr-3 md:mr-4">
              <i class="fas fa-users mr-2"></i> Our Team
          </a>
          <a href="#ourcustomers" class="block mt-2 lg:inline-block lg:mt-0 text-dark hover:underline mr-3 md:mr-4">
              <i class="fas fa-users mr-2"></i> Our Customers
          </a>
          <a href="#ourbusiness" class="block mt-2 lg:inline-block lg:mt-0 text-dark hover:underline mr-3 md:mr-4">
              <i class="fas fa-briefcase mr-2"></i> Business & Career
          </a>
          <a href="#contact" class="block mt-2 lg:inline-block lg:mt-0 text-dark hover:underline mr-3 md:mr-4">
              <i class="fas fa-envelope mr-2"></i> Contact
          </a>

          @guest
                <button data-dropdown-toggle="dropdown" class="text-black hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Guest<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>

                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <hr>
                    <li>
                        <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Register</a>
                    </li>
                    </ul>
                </div>

            @else

            <button data-dropdown-toggle="dropdown" class="text-black hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">{{ Auth::user()->name }}<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg></button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                     <p class="mx-3 my-2">{{ Auth::user()->email }}</p>
                </li>
                <hr>
                <li>
                    <a href="#setting" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                @can('admin only')
                <li>
                    <a href="/admin/home" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Admin Panel</a>
                </li>
                @endcan
                <li>
                    <a href="/user/home" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
                </ul>
            </div>
            @endif  
            {{-- @endguest --}}
      </div>
  </div>
</nav>
