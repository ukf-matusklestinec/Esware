@if (Auth::check() && auth()->user()->Veduci_pracoviska | auth()->user()->Admin)
    <x-layout>

        <a href="javascript:history.back()"
            class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i
                class="fa-solid fa-arrow-left"></i> Naspäť
        </a>


        <x-card class="p-10 max-w-auto mx-auto mt-6">
            <header>

                <h1 class="text-2xl text-center font-bold mb-6">
                    Monitorovanie ponúk
                </h1>


            </header>
            <style>
                tbody tr:hover {
                    /* Add a blue background color to the table on hover */
                    background-color: rgb(45, 87, 239);
                    color: white;
                }
            </style>
            {{-- @include('partials._search') --}}
            <table class="w-full table-auto rounded-sm">
                <thead>
                    @unless($aktivity2->isEmpty())
                        <tr>
                            <th>Ponuka</th>
                            <th>Firma</th>
                            <th>Študent</th>
                            <th>Aktívna prax</th>
                            <th>Spätná väzba</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aktivity2 as $aktivit)
                            <tr class="border-gray-300">
                                <td class="py-2 text-l border-b text-center">
                                    {{ $aktivit->listing->title }}
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    {{ $aktivit->listing->company }}
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    <a class="hover:text-red-500"
                                        href="/profil/{{ $aktivit->user->id }}">{{ $aktivit->user->name }}</a>
                                    <a href="/aktivity/{{ $aktivit->id }}">
                                        {{-- zobrazí aktivitu daného študenta --}}
                                        <i class="fa fa-user-plus text-green-500 hover:text-black" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    @if ($aktivit->aktivna == 1)
                                        Áno
                                    @else
                                        Nie
                                    @endif
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    @if ($aktivit->spatna_vazba == null)
                                        Žiadna spätná väzba.
                                    @else
                                        {{ $aktivit->spatna_vazba }}
                                    @endif
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    <a href="/prihlasenie/{{ $aktivit->id }}/edit"
                                        class="text-blue-400 px-6 py-2 rounded-xl hover:text-white"><i
                                            class="fa-solid fa-pen-to-square"></i> Edit</a>
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    <form method="POST" action="/prihlasenie/{{ $aktivit->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-500 hover:text-white"><i class="fa-solid fa-trash"></i>
                                            Odstrániť </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="border-gray-300">
                            <td class="py-2 text-l border-b text-center">
                                <p class="text-center">Študenti nie sú prihlásení na žiadnej ponuke</p>
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
{{--  zástupcu firmy alebo organizácie ohľadom pracovnej ponuky --}}
