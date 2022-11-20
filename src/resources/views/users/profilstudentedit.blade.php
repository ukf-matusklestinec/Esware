<x-layout>

    <a href="/profilstudent" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <x-card class="p-10 max-w-2xl mx-auto mt-6">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-6">Editácia profilu</h2>
        </header>
        <form method="POST" action="/profilstudentedit/{{$users->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="text-center">
                <div class="mb-4">
                    <label for="name" class="inline-block text-lg mb-2">Meno:</label>
                    <input type="name" name="name" class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 73.68px;" value="{{old('name')}}">
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="inline-block text-lg mb-2">E-mail:</label>
                    <input type="email" name="email" class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 70.31px;" value="{{old('email')}}">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="tel" class="inline-block text-lg mb-2">Tel. číslo:</label>
                    <input type="tel" name="tel" class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 54.49px;" value="{{old('tel_cislo')}}">
                    @error('tel_cislo')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
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