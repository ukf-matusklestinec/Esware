
<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Ukonciť prax pre študenta</h2>
        </header>

        <form method="POST" action="/prihlasenie/{{$aktivity->id}}" enctype="multipart/form-data">

            @csrf
            @method('PUT')

                <div class="mb-6">
                    <label for="aktivna">Aktívna ponuka</label>
                    <select name="aktivna" id="id" class="border border-gray-200 rounded p-2 w-full">
                        <option value="0">Nie</option>
                        <option value="1">Ano</option>
                    </select>

                @error('aktivna')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="spatna_vazba" class="inline-block text-lg mb-2">
                    Spätná väzba pre študenta <b>{{$aktivity->user->name}}</b>
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="spatna_vazba" rows="10"
                          placeholder="Include tasks, requirements, salary, etc">{{$aktivity->spatna_vazba}}</textarea>

                @error('spatna_vazba')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update ponuku študenta
                </button>

                <a href="/prihlasenie" class="text-black ml-4"> Naspät </a>
            </div>
        </form>
    </x-card>
</x-layout>
