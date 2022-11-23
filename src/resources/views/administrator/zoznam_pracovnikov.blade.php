@if (Auth::check() && auth()->user()->Admin)
    <x-layout>

        <a href="/nexus_admin" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center"
            style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
        </a>


        <x-card class="p-10 max-w-lg mx-auto mt-6">
            {{-- pridať searchbar --}}
            <header>
                <h1 class="text-2xl text-center font-bold mb-6">
                    Zoznam poverených zamestnancov
                </h1>
            </header>

            <table class="w-full table-auto rounded-sm items-center justify-center text-center">
                <tbody>
                    @unless($users->isEmpty())
                        @foreach ($users as $zam)
                            <tr class="border-gray-300">
                                <td class="py-2 border-b text-l">
                                    {{ $zam->name }}
                                </td>


                                {{-- odstránenie povereného zamestnanca WIP --}}
                                <td class="py-2 border-b text-l">
                                    <form method="POST" action="/listings/{{ $zam->id }}">
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
