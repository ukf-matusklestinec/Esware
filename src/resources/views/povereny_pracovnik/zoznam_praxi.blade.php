@if (Auth::check() && auth()->user()->Povereny_pracovnik)
    <x-layout>

        <a href="/nexus_povereny" class="inline-block text-black ml-4 mb-4">
            <i class="fa-solid fa-arrow-left"></i> Naspäť
        </a>

        <x-card class="p-10">
            <header>
                <h1 class="text-3xl text-center font-bold my-6 uppercase">
                    Zoznam praxí na schválenie
                </h1>
            </header>

            <table class="w-full table-auto rounded-sm">
                <tbody>
                    @unless($listings->isEmpty())
                        @foreach ($listings as $prax)
                            <tr class="border-gray-300">
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    {{ $prax->title }}
                                </td>


                                {{-- zobrazenie info praxe --}}
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a href="/listings/{{ $prax->id }}"> Zobrazenie pracovnej ponuky </a>
                                </td>

                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <form method="POST" action="/zoznam_praxi/{{ $prax->id }}">
                                        @csrf
                                        @method('PUT')
                                        <button class="text-blue-500"> Schváliť </button>
                                    </form>
                                </td>

                                {{-- odstránenie ponuky praxe --}}
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
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
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
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
