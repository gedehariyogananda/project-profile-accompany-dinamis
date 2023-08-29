<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | TwiseCode</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css">
    <link rel="icon" type="image/jpg" href="/img/twist.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    
    {{-- components navbar --}}
    <x-navbar/>

    {{-- main content --}}
    {{ $slot }}

    <hr>
    {{-- components navbar --}}
    <x-footer/>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
            $('#carrierSubmitted').click(function(event) {
                var form =  $(this).closest("form");
                    event.preventDefault();
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, apply it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                        Swal.fire(
                            'Applyed!',
                            'Your file has been added, always check ur email because the seleksion will be announce in your email.',
                            'success'
                        )
                        form.submit();
                        }
                    })
                });

                $('#loginChecked').click(function(event) {
                var form =  $(this).closest("href");
                    event.preventDefault();
                    Swal.fire({
                        title: 'u must be login to apply?',
                        text: "You won't be able to revert this?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, login!'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = `/login`
                        }
                    })
                });
      </script>
</body>
</html>