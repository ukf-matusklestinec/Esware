<x-layout>
    
    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Administratívny nexus
        </h1>
    </header>
   
    <body>
        <div class="lg:grid lg:grid-cols-4 gap-4 space-y-4 md:space-y-0 mx-4">

        <x-card>
            <div class="flex justify-center">
                <button
                    type="submit"
                    class="text-xl font-bold hover:text-laravel ">
                    Spravovať študentov
                </button>
            </div>
        </x-card>
        <x-card>
            <div class="flex justify-center">
                <button
                    type="submit"
                    class="text-xl font-bold hover:text-laravel">
                    Spravovať pracoviská
                </button>
            </div>
        </x-card>
            
        <x-card>
            <div class="flex justify-center">
                <button
                    type="submit"
                    class="text-xl font-bold hover:text-laravel">
                    Spravovať poverených a vedúcich pracovísk
                </button>
            </div>
        </x-card>
        <x-card>
            <div class="flex justify-center">
                <button
                    type="submit"
                    class="text-xl font-bold text-center hover:text-laravel">
                    Spravovať zoznam firiem a organizácií
                </button>
            </div>
        </x-card>
        </div>
    </body>


</x-layout>

{{-- treba dorobiť inputy --}}
