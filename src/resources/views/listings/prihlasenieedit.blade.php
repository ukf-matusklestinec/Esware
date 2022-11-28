<x-layout>
    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <x-card class="p-10 max-w-lg mx-auto mt-6">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-6">Ukončiť prax pre študenta</h2>
        </header>

        <form method="POST" action="/prihlasenie/{{ $aktivity->id }}" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="text-center">

                <div class="mb-4">
                    <label for="aktivna" class="inline-block text-lg mb-2">Aktívna ponuka</label>
                    <select name="aktivna" id="id" class="border border-gray-200 rounded p-2 w-full">
                        <option value="0">Nie</option>
                        <option value="1">Ano</option>
                    </select>

                    @error('aktivna')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="spatna_vazba" class="inline-block text-lg mb-2">
                        Spätná väzba pre študenta <b>{{ $aktivity->user->name }}</b>
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="spatna_vazba" rows="10" placeholder="Include tasks, requirements, salary, etc">{{ $aktivity->spatna_vazba }}</textarea>

                    @error('spatna_vazba')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Upraviť ponuku študenta
                    </button>
                </div>
                <div class="mt-4">
                    <a href="/prihlasenie" class="text-laravel hover:text-black">Naspäť</a>
                </div>
            </div>
        </form>
    </x-card>
</x-layout>

{{-- editácia prihlásenia praxe pre študenta --}}