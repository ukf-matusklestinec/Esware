@if (Auth::check() && auth()->user()->Povereny_pracovnik)
<x-layout>

    <a href="/nexus_povereny" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť </a>

    <x-card class="p-10 max-w-4xl mx-auto mt-6">
        <header>
            <h1 class="text-2xl text-center font-bold mb-6">
                Zoznam študentov
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($users->isEmpty())
                @foreach ($users as $user)
                <tr class="border-gray-300">
                    <td class="py-2 text-l border-b">
                        <a class="hover:text-laravel" href="/profil/{{ $user->id }}">{{ $user->name }}</a>
                    </td>

                    {{-- odbor študenta --}}
                    <td class="py-2 text-l border-b">
                        {{ $user->odbor }}
                    </td>

                    {{-- zobrazenie jeho praxe TREBA OPRAVIŤ AK NEMÁ ŽIADNE PONUKY --}}

                    <td class="py-2 text-l border-b">
                        <a href="/listings/{{ $user->id }}" class="hover:text-laravel"> Zobrazenie pracovnej ponuky </a>
                    </td>

                </tr>
                @endforeach
                @else
                {{-- výpis ak žiadny študenti nie sú v databáze --}}
                <tr class="border-gray-300">
                    <td class="py-2 text-l border-b">
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