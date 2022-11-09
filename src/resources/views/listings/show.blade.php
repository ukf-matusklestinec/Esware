<style>
    .item1 {
        grid-area: photo;
    }
    .item2 {
        grid-area: main;
    }
    .item3 {
        grid-area: right;
    }
    .item4 {
        grid-area: footer;
    }

    .grid-container {
        display: grid;
        grid-template-areas:
            'photo main main main main main'
            'photo right right right right right'
            'footer footer footer footer footer footer';
    }

    .grid-container>div {
        text-align: center;
    }
</style>


<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <div class="mx-4">
        <x-card class="p-10 max-w-xl mx-auto mt-6">
            <div class="grid-container">
                <div class="item1">
                    <img class="w-48 border border-black-200 rounded mb-4" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-imageUKF.png')}}" alt="" />
                </div>
                <div class="item2">
                    <h3 class="text-3xl mb-2">{{$listing->title}}</h3>
                    <p class="text-2xl font-bold mb-3">{{$listing->company}}</p>
                    <div class="text-lg mb-2">
                        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                    </div>
                </div>
                <div class="item3">
                    <div>
                    <a href="{{$listing->website}}" target="_blank" class="text-laravel">
                            <i class="fa-solid fa-globe"></i> Stránka firmy</a>
                            <br>
                        <a href="mailto:{{$listing->email}}" class="text-laravel"><i class="fa-solid fa-envelope"></i>
                        Kontaktovať</a>
                    </div>

                </div>
                <div class="item4">
                    <h3 class="text-3xl font-bold mb-4">
                        Náplň práce
                    </h3>
                    <p class="border border-black-200 rounded text-lg space-y-6">{{$listing->description}}</p>
                </div>
            </div>
            <div class="items-center justify-center text-center flex mt-6 mb-6">
                <x-listing-tags :tagsCsv="$listing->tags" />
            </div>
            @auth
            @unless($aktivity->isEmpty())

            @else
            <a href="/prihlas/{{$listing->id}}" target="_blank" 
            class="block bg-green-600 text-white py-2 rounded-xl hover:opacity-80 text-center">
            <i class="fa-solid fa-user"></i> Prihlásiť sa na ponuku</a>
            @endunless
            @endauth
    </div>
    </x-card>

    </div>
</x-layout>

{{-- po rozkliknutí konkrétnej ponuky sa zobrazí popis práce --}}