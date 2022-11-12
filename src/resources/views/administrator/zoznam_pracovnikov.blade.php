<x-layout>
    <x-card class="p-10">
        {{-- pridať searchbar --}}
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Zoznam vedúcich a poverených zamestnancov
            </h1>
        </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
        @unless($users->isEmpty())
            @foreach($users as $zam)
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/listings/{{$zam->id}}"> {{$zam->name}} </a>
                    </td>

                    {{-- úprava používateľovych ponúk --}}
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/listings/{{$zam->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                class="fa-solid fa-pen-to-square"></i>
                            Upraviť</a>
                    </td>

                    {{-- odstránenie používateľových ponúk --}}
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <form method="POST" action="/listings/{{$zam->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Odstrániť</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        @else
            {{-- výpis ak žiadny zamestnanci nie sú v databáze --}}
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <p class="text-center">Nenašli sa žiadny zamestnanci</p>
                </td>
            </tr>
        @endunless

        </tbody>
    </table>
    </x-card>
</x-layout>
