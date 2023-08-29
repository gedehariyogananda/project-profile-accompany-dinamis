<x-masters title="Appalyed">
    <div class="px-10 py-10 bg-gray-100">
        <h1 class="mx-24 text-2xl font-semibold text-dark text-center">{{ $carrier->name_position }}</h1>
    </div>

    <div class="mx-24 py-10">
        <div class="grid grid-cols-2">
                <div class="grid-span-1">
                    <h2 class="text-semibold text-xl font-semibold">Requirment</h2>
                    <h1 class="text-lg">1. {{ $carrier->syarat1 }}</h1>
                    <h1 class="text-lg">2. {{ $carrier->syarat2 }}</h1>
                    <h1 class="text-lg">3. {{ $carrier->syarat3 }}</h1>
                    <h1 class="text-lg">4. {{ $carrier->syarat4 }}</h1>
                    <h1 class="text-lg">5. {{ $carrier->syarat5 }}</h1>
                  
                </div>
        </div>
    </div>
</x-masters>    