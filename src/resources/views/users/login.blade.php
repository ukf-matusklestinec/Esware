<x-layout>

    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>

    <x-card class="p-10 max-w-lg mx-auto mt-6">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-6">Prihlásenie k vášmu účtu</h2>
        </header>

        <form action="/users/authenticate" method="post">
            @csrf
            <div class="text-center">
                <div class="mb-4">
                    <input type="email" name="email" class="border border-black-200 rounded p-2 w-full" style="width: 350px;" placeholder="E-mail (napr. jan@novak.sk)" value="{{ old('email') }}">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input type="password" class="border border-black-200 rounded p-2 w-full" name="password" value="{{ old('password') }}" placeholder="Heslo" style="width: 350px;" />
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Prihlásiť sa
                    </button>
                </div>
                <div class="mt-4">
                    <a href="/register" class="text-laravel hover:text-black">Nová registrácia</a>
                </div>
            </div>
        </form>


    </x-card>
</x-layout>

{{-- v rámci loginu nastáva autentikácia účtu, v prípade ak daný účet neexistuje tak na to systém upozorní.
     používateľ má možnosť prejsť na registračný formulár --}}