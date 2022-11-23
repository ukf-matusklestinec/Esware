<x-layout>


    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Pridajte vašu aktivitu</h2>

        </header>

        <form method="POST" action="/aktivity/{{ $priid }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                {{-- pridanie počtu hodín, ktoré študent odpracoval, limitované na max 24 hodín --}}
                <label for="pocet_hodin" class="inline-block text-lg mb-2">Počet hodín</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="pocet_hodin" min="0"
                    max="24" value="{{ old('pocet_hodin') }}" />

                @error('pocet_hodin')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                {{-- výber ak študent pracoval doma alebo nie --}}
                <label for="homeoffice">Home office:</label>
                <select name="homeoffice" id="id" class="border border-gray-200 rounded p-2 w-full">
                    <option value="0">Nie</option>
                    <option value="1">Áno</option>
                </select>
            </div>


            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Pridať aktivitu
                </button>

                <a href="/aktivity/{{ $priid }}" class="text-black ml-4"> Naspäť </a>
            </div>
        </form>

    </x-card>
</x-layout>


{{-- vytvorenie aktivity študentom --}}
