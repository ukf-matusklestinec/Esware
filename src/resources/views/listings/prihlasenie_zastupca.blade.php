
<x-layout>

    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Monitorovanie ponúk
            </h1>
        </header>
        {{-- @include('partials._search') --}}
        <table class="w-full table-auto rounded-sm">
            <tbody>
            @unless($zas->isEmpty())

                <tr>
                    <th>Ponuka</th>
                    <th>Firma</th>
                    <th>Študent</th>
                    <th>Aktívna prax</th>
                    <th>Spätná väzba</th>
                </tr>

                @foreach($zas as $zas2)
                @foreach($aktivity2 as $aktivit)
                    @if($aktivit->listing_id == $zas2->id)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                            {{$aktivit->listing->title}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                            {{$aktivit->listing->company}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                            <a href="mailto:{{$aktivit->user->email}}">
                                {{$aktivit->user->name}}
                            </a>
                            <a href="/aktivity/{{$aktivit->id}}">
                                <b>+</b>
                            </a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                            @if($aktivit->aktivna == 1)
                                Ano
                            @else
                                Nie
                            @endif
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center">
                            @if($aktivit->spatna_vazba == null)
                                Žiadna spätná väzba.
                            @else
                                {{$aktivit->spatna_vazba}}
                            @endif
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/prihlasenie/{{$aktivit->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                    class="fa-solid fa-pen-to-square"></i>
                                Edit</a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <form method="POST" action="/prihlasenie/{{$aktivit->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Odstrániť</button>
                            </form>
                        </td>
                    </tr>
                    @else
                        <p hidden>{{$count--}}</p>
                    @endif
                @endforeach
                @endforeach
            @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">Ešte ste nevytvorili ponuku</p>
                    </td>
                </tr>
            @endunless

            </tbody>
        </table>


    </x-card>
{{--   ak ma ponuky ale niesu ziadny studenti prihlaseny--}}
    @if($zascount != 0)
    @if($count == 0)
        <br>
        <x-card>
        <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <p class="text-center">Študenti nie sú prihlásení na vašej ponuke</p>
            </td>
        </tr>
        </x-card>
    @endif
    @endif

</x-layout>

{{-- zobrazenie pracovných ponúk u zamestnávateľa --}}
