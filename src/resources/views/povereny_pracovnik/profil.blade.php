<x-layout>

    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <x-card class="p-10 max-w-lg mx-auto mt-6">
        <div class="flex flex-col items-center justify-center text-center">
            <div class="border border-black-200 rounded mb-6">
                <img class="w-48 " alt="avatar1" src="https://us.123rf.com/450wm/apoev/apoev1901/apoev190100066/126178784-person-gray-photo-placeholder-man-in-a-costume-on-white-background.jpg?ver=6" />
            </div>
            <h3 class="text-2xl font-bold">{{ $users->name }}</h3>
            <div class="text-l mb-3">ID: {{ $users->id }}</div>
            <div class="text-l">{{ $users->odbor }}</div>
            <div class="border border-black w-full mb-6 mt-6"></div>

            <h3 class="text-xl font-bold">Tel. číslo</h3>
            <div class="text-l mb-3">{{ $users->tel_cislo }}</div>
            <h3 class="text-xl font-bold">E-mail</h3>
            <a class="hover:text-laravel text-l" href="" target="_blank">{{ $users->email }}</a>
            <div class="border border-black w-full mb-6 mt-6"></div>
            <div>
                <h3 class="text-xl font-bold">
                    <i class="fa-solid fa-location-dot"></i> {{ $users->Ulica }}, {{ $users->Mesto }}
                </h3>
            </div>
        </div>
    </x-card>


</x-layout>

{{-- po rozkliknuti sa zobrazí profil  --}}