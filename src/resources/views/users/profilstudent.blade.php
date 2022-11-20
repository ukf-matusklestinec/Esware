<x-layout>

    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>

        <x-card class="p-10 max-w-lg mx-auto mt-6">
            <a href="/profilstudentedit" class="text-l text-black" style="position: relative; left: 75%; bottom: 20px;">
                <i class="fa-solid fa-gear"></i> Editovať profil
            </a>
            <div class="flex flex-col items-center justify-center text-center">
                <div class="border border-black-200 rounded mb-6">
                    <img class="w-48 " alt="avatar1" src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp" />
                </div>
                <h3 class="text-2xl font-bold mb-2">{{auth()->user()->name}}</h3>
                <div class="text-l mb-4">{{auth()->user()->id}}</div>
                <div class="text-l">{{auth()->user()->odbor}}</div>
                <div class="border border-black w-full mb-6 mt-6"></div>

                <h4 class="text-xl font-bold mb-2">Tel. číslo</h4>
                <div class="text-l mb-4">+421 999 999 999</div>
                <h4 class="text-xl font-bold mb-2">E-mail</h4>
                <a class="hover:text-laravel text-l" href="" target="_blank">{{auth()->user()->email}}</a>
                <div class="border border-black w-full mb-6 mt-6"></div>
                <div>
                    <h3 class="text-xl font-bold">
                        <i class="fa-solid fa-location-dot"></i> Trenčín
                    </h3>
                </div>
            </div>
        </x-card>


</x-layout>

{{-- po rozkliknuti sa zobrazí profil studenta --}}