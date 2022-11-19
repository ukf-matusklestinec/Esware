@if(Auth::check() && auth()->user()->Povereny_pracovnik)
<x-layout>

    <a href="/nexus_povereny" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>

    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Zoznam prihlásených organizácií a firiem
        </h1>
    </header>



</x-layout>
@else
    Nemáte prístup!
@endunless
