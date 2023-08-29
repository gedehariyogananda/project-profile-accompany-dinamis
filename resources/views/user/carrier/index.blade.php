<x-masters title="Carrier">
    <div class="px-10 py-10 bg-gray-100">
        <h1 class="mx-24 text-2xl font-semibold text-dark text-center">About Carrier Applay</h1>
    </div>

    <div class="mx-24 py-10">
        <a href="/">back</a>
        <div class="grid grid-cols-2 gap-4 ">
            <div class="grid-span-1  text-center">
                @foreach($carriers as $carrier)
                    <div class="border rounded-xl mb-3">
                        <div class="text-center">
                            <h1 class="text-2xl font-semibold">{{ $carrier->name_position }}</h1>
                            <img class="mx-auto" src="{{ asset('storage/' . $carrier->img) }}" alt="{{ $carrier->name_position }}">
                            <div class="my-4">
                                <a class="px-10 py-2 bg-gray-700 text-white rounded-xl" href="{{ route('user.carrier.make', $carrier) }}">Check Syarat</a>
                            </div>
                            <h5>Deadline : {{ $carrier->tenggat }}</h5>
                            <div>
                                @foreach($carrier->submits as $key)
                                    @if($key->carrier_id == $carrier->id && Auth::user()->id == $key->user_id)
                                        <a class="text-sm text-red-600 font-semibold" href="{{ route('user.submit.show', $key) }}">- See detail your information apply -</a>
                                    @endif
                                @endforeach
                            </div>  
                        </div>
                    </div>
            @endforeach
        </div>
        
            <div class="grid-span-1">
                <div class="border rounded-xl">
                    <h5 class="text-3xl py-3 text-center">Submitted Your Application</h5>
                    <form action="{{ route('user.carrier.store', $carrier) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mx-4 my-2">
                            <label class="mb-4" for="">Full Name</label>
                            <div>
                                <input class="rounded-lg w-full py-2 border" type="text" name="full_name">
                            </div>
                            @error('full_name')
                                {{ $message }}
                            @enderror
                        </div>  
                        <div class="mx-4 my-2">
                            <label class="mb-4" for="">Email</label>
                            <div>
                                <input class="rounded-lg w-full py-2 border" type="text" name="email">
                            </div>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>  
                        <div class="mx-4 my-2">
                            <label class="mb-4" for="">Phone</label>
                            <div>
                                <input class="rounded-lg w-full py-2 border" type="text" name="phone">
                            </div>
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </div>  

                        <div class="mx-4 my-2">
                            <label class="mb-4" for="">File CV</label>
                            <div>
                                <input class="rounded-lg w-full border" type="file" name="file_cv" placeholder="Attach your CV">
                            </div>
                            @error('file_cv')
                                {{ $message }}
                            @enderror
                        </div>  
                        <div class="mx-4 my-2">
                            <label for="">Entry Position</label>
                            <select class="w-full py-2 rounded-lg " name="carrier_id" id="">
                                @foreach($carriers as $carrier)
                                        @if($carrier->submits )
                                            <option value="{{ $carrier->id }}">{{ $carrier->name_position }}</option>
                                        @else
                                            <option value="#" disabled>You only have 1 Position</option>
                                        @endif
                                    @endforeach
                                
                            </select>
                            {{-- <input type="text" name="carrier_id" value="{{ $carrier->id }}">
                            <section>
                                <input type="dsds">
                            </section> --}}
                        </div>

                        <div class="mx-4 my-2">
                            <button id="carrierSubmitted" class="px-28 py-2 bg-gray-700 w-full text-white rounded-xl" type="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-masters>    