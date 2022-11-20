@if(Auth::check() && auth()->user()->Admin)
<x-layout>

    <a href="/nexus_admin" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"
    ><i class="fa-solid fa-arrow-left"></i> Naspäť 
    </a>

    <x-card class="p-10">
        {{-- pridať searchbar --}}
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Zoznam vedúcich pracovísk
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
            @unless($users->isEmpty())
                @foreach($users as $ved)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            {{$ved->name}}
                        </td>


                        {{-- odstránenie používateľových ponúk --}}
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <form method="POST" action="/listings/{{$ved->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Odstrániť</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            @else
                {{-- výpis ak žiadny vedúci pracovísk nie sú v databáze --}}
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
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
