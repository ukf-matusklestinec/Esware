@if (Auth::check() && auth()->user()->Admin)
<x-layout>

    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť </a>


    <x-card class="p-10 max-w-lg mx-auto mt-6">
        <header>
            <h1 class="text-2xl text-center font-bold mb-6">
                Zoznam Pracovísk
            </h1>
        </header>



</x-layout>
@else
Nemáte prístup!
@endunless