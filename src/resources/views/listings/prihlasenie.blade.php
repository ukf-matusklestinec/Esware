
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
            @unless($aktivity2->isEmpty())
                <tr>
                    <th>Ponuka</th>
                    <th>Firma</th>
                    <th>Student</th>
                    <th>Aktívna prax</th>
                    <th>Spätná väzba</th>
                </tr>
                @foreach($aktivity2 as $aktivit)
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
                                Áno
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
                                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">Študenti nie sú prihlásení na žiadnej ponuke</p>
                    </td>
                </tr>
            @endunless

            </tbody>
        </table>

    </x-card>
</x-layout>

{{-- zobrazenie pre zamestávateľa ( zástupcu firmy alebo organizácie) ohľadom pracovnej ponuky --}}
