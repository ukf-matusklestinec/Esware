<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/faviconMsWare.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#2d57ef",
                    },
                },
            },
        };
    </script>
    <title>Ms Ware</title>
</head>
<body>
<nav class="flex justify-between items-center mb-4">
    <a href="/"
    ><img class="w-24 ml-6" src="{{asset('images/logoMsWare.png')}}" alt="" class="logo"
        /></a>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth
        <li>
            <span class="font-bold.uppercase">
                Vitaj <a href = "/profil"><b>{{auth()->user()->name}}</b></a>
            </span>
        </li>
        <li>
            <a href="/listings/manage" class="hover:text-laravel"
            ><i class="fa-solid fa-gear"></i>
                Tvoje ponuky</a
            >
        </li>
            <li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="hover:text-laravel">
                        <i class="fa-solid fa-sign-out"></i> Odhlásiť sa
                    </button>
                </form>
            </li>
        @else
        <li>
            <a href="/login" class="hover:text-laravel"
            ><i class="fa-solid fa-sign-in"></i>
                Prihlasenie</a
            >
        </li>

        <li>
            <a href="/register" class="hover:text-laravel"
            ><i class="fa-solid fa-user-plus"></i> Registracia</a
            >
        </li>
        @endauth
    </ul>
</nav>
{{-- View Output --}}
<main>
    {{$slot}}
</main>

<footer
    class="bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-15 mt-15 opacity-90 md:justify-center"
>
    <p class="mt-3 mb-3">© 2022, Všetky práva vyhradené</p>
</footer>
</body>
</html>
