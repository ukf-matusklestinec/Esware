<x-layout>

    @include('partials._hero')
    @include('partials._search')
    {{-- ak student sa prihlasil na prax, je tu tlacidlo pre pridanie aktivity --}}
    @foreach($aktivity as $aktivit)


        @if($aktivit->user_id == auth()->id())
            <a href="/aktivity/{{$aktivit->id}}" class="block bg-blue-500 text-white py-2 rounded-xl hover:opacity-80 text-center"
            ><i class="fa-solid fa-user-plus"></i> Moja prax</a
            >
            <br>
            @break
        @else

        @endif
    @endforeach

    <div
        class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >

        @if(count($listings) == 0)
            <p>Žiadne ponuky</p>
        @endif

        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
    </div>

    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>

</x-layout>

{{-- slúži ako schránka na mainpage kde sa zobrazujú ponuky praxí--}}

