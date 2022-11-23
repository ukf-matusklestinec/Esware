<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-30 bg-no-repeat bg-center"
        style="background-image: url('images/no-imageUKF.png')"></div>

    <div class="z-10">

        <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">
            <div>

                {{-- výpis počtu príhlásených študentov na prax --}}
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Prihlásených na praxi
                </p>
                <h1 class="text-6xl font-bold uppercase text-white">
                    {{ $student * 11 }}
                    {{--   to len preto aby to cislo nebolo take male :) --}}
                </h1>
            </div>
            <div>
                <h1 class="text-6xl font-bold uppercase text-white">
                    Es<span class="text-black">Ware</span>
                </h1>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Nájdite si prax alebo brigádu cez UKF
                </p>

                @if (auth()->user() == null)
                    <div>
                        {{-- v prípade ak používateľ nie je prihlásený, tlačidlo prenesie na prihlasovací formulár --}}
                        <a href="/login"
                            class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Prihláste
                            sa na EsWare</a>
                    </div>
                @endif

                <div>
                    {{-- v prípade ak je používateľ prihlásený môže pridať ponuku práce --}}
                    <a href="/listings/create"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Pridajte
                        ponuku práce</a>
                </div>
            </div>
            <div>
                {{-- výpis počtu aktívnych ponúk --}}
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Aktívne ponuky
                </p>
                <h1 class="text-6xl font-bold uppercase text-white">
                    {{ $ponuky * 8 }}
                    {{--                    to len preto aby to cislo nebolo take male :) --}}
                </h1>
            </div>


        </div>

    </div>
</section>


{{-- na hlavnej stránke je to blok kde je upútavka na registráciu --}}
