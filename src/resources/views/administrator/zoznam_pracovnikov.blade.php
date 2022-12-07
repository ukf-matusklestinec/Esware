@if (Auth::check() && auth()->user()->Admin)
<x-layout>

    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť </a>


    <x-card class="p-10 max-w-lg mx-auto mt-6">
        {{-- pridať searchbar --}}
        <header>
            <h1 class="text-2xl text-center font-bold mb-6">
                Zoznam poverených zamestnancov
            </h1>
        </header>
        <div class="text-lg space-y-6 text-center mb-6">
            <a href="/pridanie_povereneho_zam" class="block bg-green-600 text-white py-2 rounded-xl hover:opacity-80">
                <i class="fa-solid fa-user"></i>
                Pridať zamestnanca</a>
        </div>
        <table id="myTable" class="w-full table-auto rounded-sm items-center justify-center text-center">
            <tbody>
                @unless($users->isEmpty())
                @foreach ($users as $zam)
                <tr class="border-gray-300">
                    <td class="py-2 border-b text-l">
                        {{ $zam->name }}
                    </td>


                    {{-- odobranie funkcie povereného zamestnanca --}}
                    <td class="py-2 border-b text-l">
                        <form method="POST" action="/zoznam_pracovnikov/{{ $zam->id }}">
                            @csrf
                            @method('PUT')
                            <button class="text-red-500 hover:text-white"><i class="fa-solid fa-trash"></i> Odobrať funkciu</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                {{-- výpis ak žiadny poverený zamestnanci nie sú v databáze --}}
                <tr class="border-gray-300">
                    <td class="py-2 border-b text-l">
                        <p class="text-center">Nenašli sa žiadny zamestnanci</p>
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