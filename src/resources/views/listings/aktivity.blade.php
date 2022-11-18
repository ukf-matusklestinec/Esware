<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>

    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Vaše Aktivity
            </h1>
        </header>

        <p>
            Počet hodín: <b>{{$pocethodin}}</b> / Počet dní <b>{{$pocetdni}}</b>
        </p>
        <br>
        @foreach($SV as $SV1)
            @if($SV1->spatna_vazba == null)
                <p>Žiadna spätná väzba</p>
                @else
        <p>
            Spätná väzba od zamestnávateľa.
            <br>{{$SV1->spatna_vazba}}
        </p>
            @endif
        @endforeach

        <table class="w-full table-auto rounded-sm">
            <tbody>

        {{-- výpis jednotlivých záznamov používateľa o jeho odpracovaných hodinách--}}
            @unless($aktivity->isEmpty())
                <tr>
                    <th>Dátum a čas</th>
                    <th>Počet hodín</th>
                    <th>Home office</th>
                </tr>

                @foreach($aktivity as $aktivit)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                            {{$aktivit->created_at}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                            {{$aktivit->pocet_hodin}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                            @if($aktivit->homeoffice == 1)
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

        {{-- tlačidlo prenesie používateľa do rozhrania, kde vyplní koľko hodín odpracoval za deň a môže si
         vybrať možnosť, či pracoval z domu alebo nie --}}
        <div class="text-lg space-y-6 text-center">
        <a
            href="/aktivity/{{$priid}}/create"
            class="block bg-green-600 text-white py-2 rounded-xl hover:opacity-80">
            <i class="fa-solid fa-user"></i>
            Pridať aktivitu</a>
        </div>
        {{-- ak študent má viac ako 160 odpracovaných hodín, čo predstavuje minimum pre prax,
            tak sa mu sprístupní možnosť stiahnuť cez tlačidlo PDF súbor ako doklad o absolvovaní --}}
        @if($pocethodin >= 160)
            <br>
            <div class="text-lg space-y-6 text-center">
                <a href="src/public/images/prax_vseobecne.pdf" download
                    class="block bg-red-600 text-white py-2 rounded-xl hover:opacity-80">
                    <i class="fa-solid fa-file-pdf"></i>
                    Stiahnuť PDF</a>
            </div>
        @endif


    </x-card>
</x-layout>

{{-- zobrazenie aktivít študenta --}}
