<x-layout>

    <a href="javascript:history.back()"
        class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i
            class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <div class="mx-4">
        <x-card class="p-10 max-w-lg mx-auto mt-6">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-6">Profil firmy</h2>
            </header>
            <div class="flex flex-col items-center justify-center text-center">
                <div class="border border-black-200 rounded mb-6">
                    <img class="w-48 " alt="avatar1" src="https://us.123rf.com/450wm/apoev/apoev1901/apoev190100066/126178784-person-gray-photo-placeholder-man-in-a-costume-on-white-background.jpg?ver=6" />
                </div>
                <h3 class="text-2xl font-bold">{{ $listing->company }}</h3>
                <div class="text-l mb-3">1</div>
                <div class="text-l">ISIN</div>
                <div class="border border-black w-full mb-6 mt-6"></div>
                <h3 class="text-xl font-bold">Zástupca firmy</h3>
                <div class="text-l mb-3">XX XX</div>
                <h3 class="text-xl font-bold">Tel. číslo</h3>
                <div class="text-l mb-3">+421 999 999 999</div>
                <h3 class="text-xl font-bold">E-mail</h3>
                <a class="hover:text-laravel text-l" href="mailto:{{ $listing->email }}">{{ $listing->email }}</a>
                <div class="border border-black w-full mb-6 mt-6"></div>
                <div>
                    <h3 class="text-xl font-bold mb-3">
                        <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                    </h3>
                    <div class="text-lg space-y-6">
                        <a href="{{ $listing->website }}" target="_blank" class="hover:text-laravel text-l"><i
                                class="fa-solid fa-globe"></i> Stránka firmy</a>
                    </div>
                </div>
            </div>
        </x-card>

    </div>
</x-layout>

{{-- po rozkliknutí sa zobrazí profil konkrétnej firmy --}}
