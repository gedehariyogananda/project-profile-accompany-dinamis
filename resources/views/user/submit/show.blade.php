<x-masters title="Submit - {{ Auth::user()->name }} {{ $submit->carrier->name_position }} ">

    <div class="px-10 py-10 bg-gray-200">
        <h1 class="text-3xl font-sembold text-center">Your Editted About {{ $submit->carrier->name_position }} Apply</h1>
    </div>

    <div class="border-full">
        <div class="px-20 py-20">
            <form action="{{ route('user.submit.update', $submit) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div>
                    <input type="hidden" name="oldImage" value="{{ $submit->file_cv }}">
                    <label for="">Full Name</label>
                    <input name="full_name" class="rounded-lg w-full" type="text" value="{{ $submit->full_name }}">
                   @error('full_name')
                        {{ $message }}
                   @enderror
                </div>
                <div>
                    <label for="">Email</label>
                    <input name="email" class="rounded-lg w-full" type="email" value="{{ $submit->email }}">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div>
                    <label for="">Phone Number</label>
                    <input name="phone" class="rounded-lg w-full" type="number" value="{{ $submit->phone }}">
                    @error('phone')
                    {{ $message }}
               @enderror
                </div>
                <div>
                    <label for="">File CV</label>
                    <input name="file_cv" class="rounded-lg w-full" type="file" value="{{ $submit->file_cv }}">
                    @error('file_cv')
                        {{ $message }}
                    @enderror
                </div>

                <br>
                <button class="bg-gray-700 px-3 py-3 text-white rounded-xl">Submite The Update</button>
            </form>
        </div>
    </div>

</x-masters>
