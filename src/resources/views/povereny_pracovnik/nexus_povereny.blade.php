@if (Auth::check() && auth()->user()->Povereny_pracovnik)
<x-layout>

    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Poverený zamestnanec pracoviska nexus
        </h1>
    </header>

    <body>
        <div class="lg:grid lg:grid-cols-3 gap-10 space-y-4 md:space-y-0 mx-4">

            <x-card>
                <div class="flex justify-center">
                    <form action="/zoznam_studentov">
                        <button type="submit" class="text-xl font-bold hover:text-laravel ">
                            Študenti
                        </button>
                    </form>
                </div>
            </x-card>
            <x-card>
                <div class="flex justify-center">
                    <form action="/zoznam_praxi">
                        <button type="submit" class="text-xl font-bold hover:text-laravel">
                            Praxe na schválenie
                        </button>
                    </form>
                </div>
            </x-card>

            <x-card>
                <div class="flex justify-center">
                    <form action="/zoznam_org_firm">
                        <button type="submit" class="text-xl font-bold hover:text-laravel">
                            Firmy a organizácie
                        </button>
                    </form>
                </div>
            </x-card>
        </div>
    </body>


</x-layout>
@else
Nemáte prístup!
@endunless
{{-- treba dorobiť inputy --}}