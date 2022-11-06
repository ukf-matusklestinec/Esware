<x-layout>
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
                <p>Ziadna spätná väzba</p>
                @else
        <p>
            Spätná väzba od zamestnávateľa.
            <br>{{$SV1->spatna_vazba}}
        </p>
            @endif
        @endforeach

        <table class="w-full table-auto rounded-sm">
            <tbody>


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
                        <p class="text-center">Nenasli sa ziadne aktivity</p>
                    </td>
                </tr>
            @endunless


            </tbody>
        </table>



        <div class="text-lg space-y-6 text-center">
        <a
            href="/aktivity/{{$priid}}/create"
            target="_blank"
            class="block bg-green-600 text-white py-2 rounded-xl hover:opacity-80">
            <i class="fa-solid fa-user"></i>
            Pridať aktivitu</a>
        </div>


    </x-card>
</x-layout>

