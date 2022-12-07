<x-layout>

    <a href="javascript:history.back()"
        class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i
            class="fa-solid fa-arrow-left"></i> Naspäť
    </a>

    <x-card class="p-10 max-w-xl mx-auto mt-6">


        @if (Auth::check() && auth()->user()->Veduci_pracoviska || auth()->user()->Admin || auth()->user()->Povereny_pracovnik)
            {{-- výpis ak sa na aktivitu pozrie poverená osoba--}}
        <header>
            <h1 class="text-2xl text-center font-bold mb-6">
                Aktivity študenta
            </h1>
        </header>
        @else
            {{-- výpis ak sa na aktivitu pozrie študent--}}
            <header>
                <h1 class="text-2xl text-center font-bold mb-6">
                    Vaše Aktivity
                </h1>
            </header>
        @endif

        <div class="mb-4">
            <p>
                Počet hodín: <b>{{ $pocethodin }}</b> / Počet dní <b>{{ $pocetdni }}</b>
            </p>
            <br>
            @foreach ($SV as $SV1)
                @if ($SV1->spatna_vazba == null)
                    <p>Žiadna spätná väzba</p>
                @else
                    <p>
                        Spätná väzba od zamestnávateľa.
                        <br>{{ $SV1->spatna_vazba }}
                    </p>
                @endif
            @endforeach
        </div>

        <table class="w-full table-auto rounded-sm">
            <tbody>

                {{-- výpis jednotlivých záznamov používateľa o jeho odpracovaných hodinách --}}
                @unless($aktivity->isEmpty())
                    <tr>
                        <th>Dátum a čas</th>
                        <th>Počet hodín</th>
                        <th>Home office</th>
                    </tr>

                    @foreach ($aktivity as $aktivit)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                                {{ $aktivit->created_at }}
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                                {{ $aktivit->pocet_hodin }}
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                                @if ($aktivit->homeoffice == 1)
                                    Ano
                                @else
                                    Nie
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <p class="text-center">Nenašli sa žiadne aktivity</p>
                        </td>
                    </tr>
                @endunless


            </tbody>
        </table>

        {{-- tlačidlo prenesie študenta do rozhrania, kde vyplní koľko hodín odpracoval za deň a môže si
         vybrať možnosť, či pracoval z domu alebo nie --}}
            @if (Auth::check() && auth()->user()->Veduci_pracoviska != 1 && auth()->user()->Admin != 1 && auth()->user()->Povereny_pracovnik != 1 && auth()->user()->Zastupca_firmy != 1)
        <div class="text-lg space-y-6 text-center">
            <a href="/aktivity/{{ $priid }}/create"
                class="block bg-green-600 text-white py-2 rounded-xl hover:opacity-80">
                <i class="fa-solid fa-plus"></i>
                Pridať aktivitu</a>
        </div>
            @endif
        {{-- ak študent má viac ako 160 odpracovaných hodín, čo predstavuje minimum pre prax,
            tak sa mu sprístupní možnosť stiahnuť cez tlačidlo PDF súbor ako doklad o absolvovaní --}}
            @if (Auth::check() && auth()->user()->Veduci_pracoviska != 1 && auth()->user()->Admin != 1 && auth()->user()->Povereny_pracovnik != 1 && auth()->user()->Zastupca_firmy != 1)
        @if($pocethodin >= 160)
            <br>
            <div class="text-lg space-y-6 text-center">
                <a href="/potvrdenie_download" download
                   class="block bg-red-600 text-white py-2 rounded-xl hover:opacity-80">
                    <i class="fa-solid fa-file-pdf"></i>
                    Stiahnuť PDF</a>
            </div>
        @endif
            @endif


    </x-card>
</x-layout>

{{-- zobrazenie aktivít študenta --}}
