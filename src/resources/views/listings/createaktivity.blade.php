<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Pridaj tvoju aktivitu</h2>

        </header>

        <form method="POST" action="/aktivity/{{$priid}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="pocet_hodin" class="inline-block text-lg mb-2">Počet hodín</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="pocet_hodin"
                       value="{{old('pocet_hodin')}}" />

                @error('pocet_hodin')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="homeoffice">Home office:</label>
                <select name="homeoffice" id="id" class="border border-gray-200 rounded p-2 w-full">
                    <option value="0">Nie</option>
                    <option value="1">Ano</option>
                </select>
            </div>


            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Pridať aktivitu
                </button>

                <a href="/aktivity" class="text-black ml-4"> Naspäť </a>
            </div>
        </form>

    </x-card>
</x-layout>

