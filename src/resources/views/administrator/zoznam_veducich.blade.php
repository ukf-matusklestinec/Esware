@if (Auth::check() && auth()->user()->Admin)
<x-layout>

   

    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť </a>

    <x-card class="p-10 max-w-lg mx-auto mt-6">
        {{-- pridať searchbar --}}
        <header>
            <h1 class="text-2xl text-center font-bold mb-6">
                Zoznam vedúcich pracovísk
            </h1>
        </header>
        <div class="text-lg space-y-6 text-center mb-6">
            <a href="/pridanie_ved_prac" class="block bg-green-600 text-white py-2 rounded-xl hover:opacity-80">
                <i class="fa-solid fa-user"></i>
                Pridať vedúceho pracoviska</a>
        </div>

        <table id="myTable" class="w-full table-auto rounded-sm items-center justify-center text-center">
            <tbody>
                @unless($users->isEmpty())
                @foreach ($users as $ved)
                <tr>
                    <td class="py-2 text-l border-b">
                        {{ $ved->name }}
                    </td>


                    {{-- odstránenie používateľových ponúk --}}
                    <td class="py-2 text-l border-b">
                        <form method="POST" action="/zoznam_veducich/{{ $ved->id }}">
                            @csrf
                            @method('PUT')
                            <button class="text-red-500 hover:text-white"><i class="fa-solid fa-trash"></i> Odobrať funkciu</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                {{-- výpis ak žiadny vedúci pracovísk nie sú v databáze --}}
                <tr>
                    <td class="py-2 border-b text-l">
                        <p class="text-center">Nenašli sa žiadny vedúci pracovísk</p>
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