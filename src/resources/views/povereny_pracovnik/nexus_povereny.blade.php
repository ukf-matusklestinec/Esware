

<x-layout>
    
    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Poverený zamestnanec pracoviska nexus
        </h1>
    </header>
   
    <body>
        <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">

        <x-card>
            <div class="flex justify-center">
                <button
                    type="submit"
                    class="text-xl font-bold hover:text-laravel ">
                    Študenti
                </button>
            </div>
        </x-card>
        <x-card>
            <div class="flex justify-center">
                <button
                    type="submit"
                    class="text-xl font-bold hover:text-laravel">
                    Praxe na schválenie
                </button>
            </div>
        </x-card>
            
        <x-card>
            <div class="flex justify-center">
                <button
                    type="submit"
                    class="text-xl font-bold hover:text-laravel">
                    Firmy a organizácie
                </button>
            </div>
        </x-card>
        </div>
    </body>


</x-layout>

{{-- treba dorobiť inputy --}}
