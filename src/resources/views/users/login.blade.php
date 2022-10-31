<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1" style="padding-bottom: 20px;">Prihlásenie k vášmu účtu</h2>
        </header>

        <form action="/users/authenticate" method="post">
        @csrf
            <div class="text-center">
            <div style="padding-bottom: 15px;">
                <input type="email" name="email" class="border border-black-200 rounded p-2 w-full" 
                    style="width: 350px;" placeholder="E-mail (napr. jan@novak.sk)" value="{{old('email')}}" >
                    @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <input type="password" class="border border-black-200 rounded p-2 w-full" name="password"
                       value="{{old('password')}}" placeholder="Heslo" style="width: 350px;"/>
                       @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div style="padding-top: 25px;">
            <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Prihlásiť sa
                </button>
            </div>
            <div style="padding-top: 15px;">
            <a href="/register" class="text-laravel">Nová registrácia</a>
            <br>
            <a href="/forget-password" class="text-laravel">Zabudnuté heslo</a>
            </div>
            </div>
        </form>


        </x-card>
</x-layout>