<x-layout>
    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <x-card class="p-10 max-w-2xl mx-auto mt-6">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-6">Registrácia</h2>
        </header>

        <form action="/users" method="POST">
            @csrf
            <div class="text-center">
                <div class="mb-4">
                    <label for="name" class="inline-block text-lg mb-2">Meno<span style="color:red;"> *</label>
                    <input type="name" name="name" class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 73.68px;" value="{{ old('name') }}">
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="inline-block text-lg mb-2">E-mail<span style="color:red;"> *</label>
                    <input type="email" name="email" class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 70.31px;" value="{{ old('email') }}">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="odbor" class="inline-block text-lg mb-2">Odbor<span style="color:red;">
                            *</label></label>
                    <select name="odbor" id="id" class="border border-gray-200 rounded p-2 w-half" style="width: 350px; margin-left: 68.63px;">
                        <option value="Informatika aplikovaná">Informatika aplikovaná</option>
                        <option value="Informatika učiteľstvo">Informatika učiteľstvo</option>
                        <option value="Geografia učiteľstvo">Geografia učiteľstvo</option>
                        <option value="Geografia v regionálnom rozvoji">Geografia v regionálnom rozvoji</option>
                        <option value="Chemia učiteľstvo">Chemia učiteľstvo</option>
                        <option value="Biologia">Biologia</option>
                        <option value="Biologia učiteľstvo">Biologia učiteľstvo</option>
                        <option value="Matematika učiteľstvo">Matematika učiteľstvo</option>
                        <option value="Informačné metódy v ekonómii a finančníctve">Informačné metódy v ekonómii a
                            finančníctve</option>
                        <option value="Fyzika">Fyzika</option>
                        <option value="Fyzika materialov">Fyzika materialov</option>
                        <option value="Fyzika učiteľstvo">Fyzika učiteľstvo</option>
                    </select>

                </div>


                <div class="mb-4">
                    <label for="password" class="inline-block text-lg mb-2">Heslo<span style="color:red;"> *</label>
                    <input type="password" class="border border-black-200 rounded p-2 w-full" name="password" value="{{ old('password') }}" style="width: 350px; margin-left: 75.26px;" />
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation" class="inline-block text-lg mb-2">Potvrdiť heslo<span style="color:red;"> *</label>
                    <input type="password" class="border border-black-200 rounded p-2 w-full" name="password_confirmation" value="{{ old('password_confirmation') }}" style="width: 350px; margin-left: 9.1px;" />
                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div><span style="color: red;">* sú označené povinné polia</div>
                <div class="mt-6">
                    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Registrovať sa
                    </button>
                </div>
                <div class="mt-4">
                    <a href="/login" class="text-laravel hover:text-black">Máte už účet?</a>
                    <br>
                </div>
            </div>
        </form>


    </x-card>
</x-layout>


{{-- registrácia, ktorá uživateľa upozorní ak nejaké pole nebolo vyplnené.
     K dispozícií je aj ponuka, ktorá používateľa vráti do formulára na prihlásenie --}}