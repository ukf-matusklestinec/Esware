<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div
                class="flex flex-col items-center justify-center text-center"
            >
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-imageUKF.png')}}"
                    alt=""
                />

                <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                <div class="text-xl font-bold mb-4">{{$listing->company}}</div>

                <x-listing-tags :tagsCsv="$listing->tags" />

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    {{-- Vypísaný popis práce --}}
                    <h3 class="text-3xl font-bold mb-4">
                        Náplň práce
                    </h3>
                    <div class="text-lg space-y-6">
                        {{$listing->description}}

                        {{-- tlačidlo, ktoré automaticky do mailu skopíruje mailovú adresu firmy --}}
                        <a href="mailto:{{$listing->email}}"
                           class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                            Kontaktuj firmu</a>

                        {{-- tlačidlo, ktoré používateľa prenesie na webovú stránku firmy --}}
                        <a href="{{$listing->website}}"
                           target="_blank"
                           class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i> Stránka firmy</a>
                        {{-- tlačidlo, používateľa prihlasi na vybranu ponuku (len ak je prihlaseny)--}}
                        {{-- ak uz je prihlaseny na nejkau ponuku, nezobrazi tlacidlo)--}}
                        @auth
                            @unless($aktivity->isEmpty())

                            @else
                                <a href="/prihlas/{{$listing->id}}"
                                   target="_blank"
                                   class="block bg-green-600 text-white py-2 rounded-xl hover:opacity-80"
                                ><i class="fa-solid fa-user"></i> Prihlásiť sa na ponuku</a>
                            @endunless
                        @endauth
                    </div>
                </div>
            </div>
        </x-card>

    </div>
</x-layout>

{{-- po rozkliknutí konkrétnej ponuky sa zobrazí popis práce --}}
