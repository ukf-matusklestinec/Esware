<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/faviconMsWare.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


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
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 60px;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
        } 
        #myTable {
                border-collapse: collapse;
                /* Collapse borders */
                width: 100%;
                /* Full-width */
                border: 1px solid #ddd;
                /* Add a grey border */
                font-size: 18px;
                /* Increase font-size */
            }

        #myTable th,
            #myTable td {
                text-align: center;
                /* Left-align text */
                padding: 12px;
                /* Add padding */
            }

        #myTable tr {
            /* Add a bottom border to all table rows */
            border-bottom: 1px solid #ddd;
        }

        #myTable tbody tr:hover {
            /* Add a blue background color to the table on hover */
            background-color: rgb(45, 87, 239);
            color: white;
        }
    </style>
    <title>EsWare</title>
</head>

<body>
    <nav class="flex justify-between items-center mb-4">

        {{-- funkcia loga na hlavičke stránky, ktorá prenesie používateľa na príslušnú hlavnú stránku/nexus --}}
        @if (auth()->user() == null ||
            (auth()->user()->Admin != 1 && auth()->user()->Veduci_pracoviska != 1 && auth()->user()->Povereny_pracovnik != 1))
            <a href="/">
                <img class="w-24 ml-6" src="{{ asset('images/logoMsWare.png') }}" alt="" class="logo" />
            </a>
        @elseif(auth()->user()->Admin == 1)
            <a href="/nexus_admin">
                <img class="w-24 ml-6" src="{{ asset('images/logoMsWare.png') }}" alt="" class="logo" />
            </a>
        @elseif(auth()->user()->Veduci_pracoviska == 1)
            <a href="/nexus_veduci">
                <img class="w-24 ml-6" src="{{ asset('images/logoMsWare.png') }}" alt="" class="logo" />
            </a>
        @elseif(auth()->user()->Povereny_pracovnik == 1)
            <a href="/nexus_povereny">
                <img class="w-24 ml-6" src="{{ asset('images/logoMsWare.png') }}" alt="" class="logo" />
            </a>
        @endif


        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <span class="font-bold.uppercase">
                        @if (auth()->user()->Admin != 1)
                            Vitajte
                            <a href="/profilstudent" class="hover:text-laravel">
                                <b>{{ auth()->user()->name }} </b></a>
                        @endif
                        {{-- vypísanie oprávnenia používateľa --}}
                        @if (auth()->user()->Admin == 1)
                            <b><a>Admin</a></b>
                        @endif

                        @if (auth()->user()->Veduci_pracoviska == 1)
                            <b><a>- Vedúci pracoviska</a></b>
                        @endif

                        @if (auth()->user()->Povereny_pracovnik == 1)
                            <b><a>- Poverený pracovník</a></b>
                        @endif

                        @if (auth()->user()->Zastupca_firmy == 1)
                            <b><a>- Zástupca firmy</a></b>
                        @endif
                    </span>
                </li>
                {{-- zoznam ponúk sa nezobrazí adminovy, vedúcemu a poverenému pracovníkovi --}}
                {{-- prenesie používateľa do jeho ponúk --}}
                @if (auth()->user()->Admin != 1 &&
                    auth()->user()->Veduci_pracoviska != 1 &&
                    auth()->user()->Povereny_pracovnik != 1)
                    <li>
                        <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-box-archive"></i>
                            Moje ponuky</a>
                    </li>
                @endif


                {{-- Monitorovanie študentov, ktorí sú prihlasení na prax --}}
                @if (auth()->user()->Admin == 1 || auth()->user()->Veduci_pracoviska == 1 || auth()->user()->Povereny_pracovnik == 1 || auth()->user()->Zastupca_firmy == 1)
                    <li>
                        <a href="/prihlasenie" class="hover:text-laravel"><i class="fa-solid fa-box-archive"></i>
                            Monitorovanie ponúk</a>
                    </li>
                @endif

                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="hover:text-laravel">
                            <i class="fa-solid fa-sign-out"></i> Odhlásiť sa
                        </button>
                    </form>
                </li>
            @else
                {{-- v prípade, ak nie je používateľ prihlásený sa na hlavičke objavia tlačidlá registrácia a prihlásenie --}}
                <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Registrácia</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Prihlásenie</a>
                </li>
            @endauth
        </ul>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <br>
    <br>
    <br>
    <footer
        class="bottom-0 left-0 w-full flex items-center mt-10 justify-start font-bold bg-laravel text-white h-15 mt-15 opacity-90 md:justify-center">
        <p class="mt-3 mb-3">© 2022, Všetky práva vyhradené</p>
    </footer>
    <x-flash-message />
    {{-- NEVYMAZAT!!!!!!! <x-flash-message /> lebo preto nefungovaly --}}
</body>

</html>


{{-- hlavička a päta pri prihlásenom používateľovi --}}
