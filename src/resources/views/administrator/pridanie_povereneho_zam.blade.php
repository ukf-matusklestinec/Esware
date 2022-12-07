@if (Auth::check() && auth()->user()->Admin)
    <x-layout>

        <a href="javascript:history.back()"
           class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i
                class="fa-solid fa-arrow-left"></i> Naspäť </a>

        <x-card class="p-10 max-w-lg mx-auto mt-6">
            {{-- pridať searchbar --}}
            <header>
                <h1 class="text-2xl text-center font-bold mb-6">
                    Zoznam používateľov
                </h1>
            </header>

            <table id="myTable" class="w-full table-auto rounded-sm items-center justify-center text-center">
                <tbody>
                @unless($users->isEmpty())
                    @foreach ($users as $ved)
                        <tr>
                            {{-- výpis info o používateľoch --}}
                            <td class="py-2 text-l border-b">
                                {{ $ved->name }}
                            </td>


                            {{-- pridanie zamestnanca do zoznamu poverených zamestnancov--}}
                            <td class="py-2 text-l border-b">
                                <form method="POST" action="/pridanie_povereneho_zam/{{ $ved->id }}">
                                    @csrf
                                    @method('PUT')
                                    <button class="hover:text-green-500"><i class="fa-solid fa-user-plus"></i> Pridať</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    {{-- výpis ak žiadny používatelia nie sú v databáze --}}
                    <tr>
                        <td class="py-2 border-b text-l">
                            <p class="text-center">Nenašli sa žiadny používatelia</p>
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
