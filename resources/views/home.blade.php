<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Quote</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-green-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-end">
            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="/admin/login">Sign In</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Sign Up</a></li>
                </ul>
            </nav>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                The Quote
            </a>
            <p class="text-lg text-gray-600">
                Clarify the messages hidden within the pages of books
            </p>
        </div>
    </header>

   
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Quotes Section -->
        <section class="w-full grid grid-cols-2 gap-4">
         
            <!-- quote card style -->
            @foreach($quotes as $quote)

            <div class=' text-center md:text-left md:flex-row shadow bg-white my-1 px-2 py-5 hover:opacity-90'>
                <div class="w-full flex flex-col text-center md:text-left md:flex-row bg-white mb-5">
                    <!-- user -->
                    <div class="w-full md:w-1/6 flex justify-center md:justify-center">
                        <img src="/images/blank_profile.jpg" class="rounded-full shadow h-12 w-12">
                    </div>
                    <div class="flex-1 flex flex-col justify-center md:justify-start">
                        <p class="font-semibold">{{$quote->user->name}}</p>
                        <p class="pt-0 text-gray-400">{{$quote->formateDate()}}</p>
                    </div>
                </div>

                <div class='pl-10'>
                    <p class='text-xl pb-3'>"{{$quote->text}}"</p>
                    <p>{{$quote->book}}: {{$quote->author}}</p>
                </div>

                <div class="flex items-center justify-center md:justify-end text-2s text-green-800 pr-5">
                    <p>3 comments</p>
                </div>
            </div>

            @endforeach
        </section>
    </div>
</body>

</html>