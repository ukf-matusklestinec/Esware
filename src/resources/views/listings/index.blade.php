<x-layout>

    @include('partials._hero')
    {{-- ak student sa prihlasil na prax, je tu tlacidlo pre pridanie aktivity --}}
    @foreach ($aktivity as $aktivit)
        @if ($aktivit->user_id == auth()->id())
        <div class="flex flex-col justify-center items-center">
            <a href="/aktivity/{{ $aktivit->id }}"
                class="block bg-green-500 text-center text-white py-2  w-96 rounded-xl hover:opacity-80"><i
                    class="fa-solid fa-user"></i> Moja prax</a>
            <br>
        </div>
        @break
    @endif
@endforeach
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @if (count($listings) == 0)
        <p>Žiadne ponuky</p>
    @endif

    @foreach ($listings as $listing)
        <x-listing-card :listing="$listing" />
    @endforeach
</div>

<div class="mt-6 p-4">
    {{ $listings->links() }}
</div>

</x-layout>

{{-- slúži ako schránka na mainpage kde sa zobrazujú ponuky praxí --}}
