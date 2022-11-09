<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <div class="mx-4">
        <x-card class="p-10 max-w-lg mx-auto mt-6">
            <div class="flex flex-col items-center justify-center text-center">
            <div class="border border-black-200 rounded mb-6">
                <img
                    class="w-48 "
                    alt="avatar1" src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp"/>
            </div>
                <h3 class="text-2xl font-bold mb-2">{{auth()->user()->name}}</h3>
                <div class="text-l mb-4">{{auth()->user()->id}}</div>
                <div class="text-l mb-4">AI22M</div>
                <div class="border border-gray-200 w-full mb-6"></div>

                <h4 class="text-xl font-bold mb-2">Tel. číslo</h4>
                <div class="text-l mb-4">+421 999 999 999</div>
                <h4 class="text-xl font-bold mb-2">E-mail</h4>
                <a class="text-l mb-4 text-laravel" href="" target="_blank">{{auth()->user()->email}}</a>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-xl font-bold">
                    <i class="fa-solid fa-location-dot"></i> Nemšová, Trenčín
                    </h3>
                </div>
            </div>
        </x-card>

    </div>
</x-layout>

{{-- po rozkliknuti sa zobrazí profil studenta --}}


