<style>
    .item1 {
        grid-area: photo;
    }

    .item2 {
        grid-area: main;
    }

    .item3 {
        grid-area: adresa;
    }

    .item4 {
        grid-area: footer;
    }


    .grid-container {
        display: grid;
        grid-template-areas:
            'photo photo blank main main main'
            'photo photo blank adresa adresa adresa'
            'footer footer footer footer footer footer';
    }

    .grid-container>div {
        text-align: center;
    }
</style>


<x-layout>
    {{-- ak používateľ nie je admin prenesie na ostatné ponuky --}}
    {{-- Auth::check() kontroluje, či je používateľ prihlásený/neprihlásený --}}
    @if (Auth::check() == false || (auth()->user()->Admin != 1 && auth()->user()->Povereny_pracovnik != 1))
    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    @endif

    {{-- ak používateľ je admin prenesie ho na zoznam študentov --}}
    @if (Auth::check() && auth()->user()->Admin == 1)
    <a href="/zoznam_studentov" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    @endif

    {{-- ak používateľ je poverený pracovník prenesie ho na zoznam študentov --}}
    @if (Auth::check() && auth()->user()->Povereny_pracovnik == 1)
    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    @endif


    {{-- zobrazenie informácií praxe --}}
    <div class="mx-4">
        <x-card class="p-10 max-w-2xl mx-auto mt-6">
            <div class="grid-container">
                <div class="item1">
                    <img class="w-48 border border-black-200 rounded mb-4" src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-imageUKF.png') }}" alt="" />
                </div>
                <div class="item2">
                    <h3 class="text-2xl mb-2 text-center">{{ $listing->title }}</h3>
                    <p class="text-xl font-bold mb-3">{{ $listing->company }}</p>
                    <div class="text-l">
                        <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                    </div>
                </div>
                <div class="item3">
                    <div>
                        <a href="{{ $listing->website }}" target="_blank" class="hover:text-laravel mr-6">
                            <i class="fa-solid fa-globe"></i> Stránka firmy</a>

                        <a href="mailto:{{ $listing->email }}" class="hover:text-laravel"><i class="fa-solid fa-envelope"></i>
                            Kontaktovať</a>
                    </div>

                </div>
                <div class="item4">
                    <div class="border border-black mb-2"></div>
                    <h3 class="text-2xl font-bold mb-4">
                        Náplň práce
                    </h3>
                    <p class="text-l space-y-6">{{ $listing->description }}</p>
                </div>
            </div>
            <div class="border border-black mt-2"></div>
            <div class="items-center justify-center text-center flex mt-6 mb-6 max-w-2xl">
                <x-listing-tags :tagsCsv="$listing->tags" />
            </div>

            {{-- <div class="border border-black mt-2"></div>
            <div class="items-center justify-center text-center flex mt-6 mb-6 max-w-2xl">
                <p style="font-size:15px;">Počet prihlásených študentov na tejto praxi: </p>
                <p style="font-size:25px;"><b>({{$pocet_prihlasenych}})</b></p>
    </div>
    --}}
    @auth
    @unless($aktivity->isEmpty())
    @else
    {{-- ak nie je používateľ admin, môže sa prihlásiť na prax --}}
    @if (auth()->user()->Admin != 1 && auth()->user()->Povereny_pracovnik != 1 && auth()->user()->Veduci_pracoviska != 1)
    <a href="/prihlas/{{ $listing->id }}" class="block bg-green-600 text-white py-2 rounded-xl hover:opacity-80 text-center">
        <i class="fa-solid fa-user"></i> Prihlásiť sa na ponuku</a>
    @endif
    @endunless
    @endauth
    </div>
    </x-card>
</x-layout>

{{-- po rozkliknutí konkrétnej ponuky sa zobrazí popis práce --}}
