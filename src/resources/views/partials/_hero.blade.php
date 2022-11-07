<section
    class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
>
    <div
        class="absolute top-0 left-0 w-full h-full opacity-30 bg-no-repeat bg-center"
        style="background-image: url('images/no-imageUKF.png')"
    ></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            Es<span class="text-black">Ware</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Nájdite si prax alebo brigádu cez UKF
        </p>

       @if(auth()->user() == null)
        <div>
            {{-- v prípade ak používateľ nie je prihlásený, tlačidlo prenesie na prihlasovací formulár --}}
            <a href="/login"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
            >Prihláste sa na EsWare</a>
        </div>
        @endif

        <div>
            {{-- v prípade ak je používateľ prihlásený môže pridať ponuku práce --}}
            <a href="/listings/create"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
            >Pridajte ponuku práce</a>
        </div>
    </div>
</section>


{{--na hlavnej stránke je to blok kde je upútavka na prihlásenie, či pridanie ponuky--}}
