@if (Auth::check() && auth()->user()->Povereny_pracovnik)
<x-layout>

    <a href="/nexus_povereny" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť </a>


    <x-card class="p-10 max-w-6xl mx-auto mt-6">
        <header>
            <h1 class="text-2xl text-center font-bold mb-6">
                Zoznam praxí na schválenie
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($listings->isEmpty())
                @foreach ($listings as $prax)
                <tr class="border-gray-300">
                    <td class="py-2 text-l border-b">
                        {{ $prax->title }}
                    </td>


                    {{-- zobrazenie info praxe --}}
                    <td class="py-2 text-l border-b">
                        <a href="/listings/{{ $prax->id }}"> Zobrazenie pracovnej ponuky </a>
                    </td>

                    {{-- tlačidlo, ktoré schváli danú prax --}}
                    <td class="py-2 text-l border-b">
                        <form method="POST" action="/zoznam_praxi/{{ $prax->id }}">
                            @csrf
                            @method('PUT')
                            <button class="text-blue-500"> Schváliť </button>
                        </form>
                    </td>

                    {{-- odstránenie ponuky praxe --}}
                    <td class="py-2 text-l border-b">
                        <form method="POST" action="/zoznam_praxi/{{ $prax->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Odstrániť</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                {{-- výpis ak žiadne praxe nie sú v databáze --}}
                <tr class="border-gray-300">
                    <td class="py-2 text-l border-b">
                        <p class="text-center">Nenašli sa žiadne ponuky praxe</p>
                    </td>
                </tr>
                @endunless

            </tbody>
        </table>


    </x-card>
</x-layout>
@else
Nemáte prístup!
@endunless


{{-- slúži na schválenie praxí pridanými inými používateľmi --}}