<x-layout>

    <a href="javascript:history.back()"
        class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i
            class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <x-card class="p-10 max-w-lg mx-auto mt-6">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-6">Profil zástupcu firmy</h2>
        </header>
        <div class="flex flex-col items-center justify-center text-center">
            <div class="border border-black-200 rounded mb-6">
                <img class="w-48 " alt="avatar1" src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp" />
            </div>
            <h3 class="text-2xl font-bold">{{ auth()->user()->name }}</h3>
            <div class="text-l mb-3">{{ auth()->user()->id }}</div>
            <a class="hover:text-laravel text-xl" href="" target="_blank">Firma</a>
            <div class="border border-black w-full mb-6 mt-6"></div>

            <h3 class="text-xl font-bold">Tel. číslo</h3>
            <div class="text-l mb-3">+421 999 999 999</div>
            <h3 class="text-xl font-bold">E-mail</h3>
            <a class="hover:text-laravel text-l" href="" target="_blank">{{ auth()->user()->email }}</a>
            <div class="border border-black w-full mb-6 mt-6"></div>
            <div>
                <h3 class="text-xl font-bold">
                    <i class="fa-solid fa-location-dot"></i> Trenčín
                </h3>
            </div>
        </div>
    </x-card>
