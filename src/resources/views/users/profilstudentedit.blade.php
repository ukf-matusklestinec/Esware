<x-layout>

    <a href="/profilstudent" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <x-card class="p-10 max-w-2xl mx-auto mt-6">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-6">Editácia profilu</h2>
        </header>
        <form action="/update/{{ auth()->user()->id }}" method="post">
            {{ csrf_field()}}
            <div class="text-center">
                <div class="mb-4">
                    <label for="name" class="inline-block text-lg mb-2">Meno:</label>
                    <input type="name" name="name" id="name" value="{{ auth()->user()->name }}" class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 73.68px;">
                </div>
                <!--                 <div class="mb-4">
                    <label for="datum_narodenia" class="inline-block text-lg mb-2">Dátum narodenia:</label>
                    <input type="date" name="datum_narodenia" id="datum_narodenia" value="{{ auth()->user()->datum_narodenia }}"  class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 70.31px;">
                </div> -->
                <div class="mb-4">
                    <label for="email" class="inline-block text-lg mb-2">E-mail:</label>
                    <input type="email" name="email" id="email" value="{{ auth()->user()->email }}"  class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 70.31px;">
                </div>
                <div class="mb-4">
                    <label for="tel" class="inline-block text-lg mb-2">Tel. číslo:</label>
                    <input type="tel" name="tel_cislo" id="tel_cislo" value="{{ auth()->user()->tel_cislo }}" class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 54.49px;">
                </div>
                <div class="mb-4">
                    <label for="ulica" class="inline-block text-lg mb-2">Ulica:</label>
                    <input type="ulica" name="ulica" value="{{auth()->user()->Ulica}}" class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 81.43px;">
                </div>
                <div class="mb-4">
                    <label for="mesto" class="inline-block text-lg mb-2">Mesto:</label>
                    <input type="mesto" name="mesto" value="{{auth()->user()->Mesto}}"  class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 70.13px;">
                </div>
                <div class="mb-4">
                    <label for="password" class="inline-block text-lg mb-2">Heslo:</label>
                    <input type="password" name="password" id="password" placeholder="Heslo" class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 70.13px;" required>
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Uložiť
                    </button>
                </div>
            </div>
        </form>
    </x-card>
</x-layout>
