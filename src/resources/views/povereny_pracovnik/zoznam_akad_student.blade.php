@if(Auth::check() && auth()->user()->Povereny_pracovnik)
<x-layout>

    <a href="/nexus_povereny" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>

    <x-card class="p-10">
    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Zoznam študentov
        </h1>
    </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
            @unless($users->isEmpty())
                @foreach($users as $user)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            {{$user->name}}
                        </td>

                        {{-- odbor študenta --}}
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            {{$user->odbor}}
                        </td>

                        {{-- zobrazenie jeho praxe TREBA OPRAVIŤ AK NEMÁ ŽIADNE PONUKY--}}

                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/listings/{{$user->id}}"> Zobrazenie pracovnej ponuky </a>
                        </td>

                    </tr>
                @endforeach

            @else
                {{-- výpis ak žiadny študenti nie sú v databáze --}}
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">Nenašli sa žiadny študenti</p>
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