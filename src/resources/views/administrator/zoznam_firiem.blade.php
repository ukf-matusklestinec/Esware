@if (Auth::check() && auth()->user()->Admin)

<x-layout>

    <a href="javascript:history.back()" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť </a>

    <x-card class="p-10 max-w-6xl mx-auto mt-6">

        <header>
            <h1 class="text-2xl text-center font-bold mb-6">
                Zoznam firiem
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($listings->isEmpty())
                @foreach ($listings as $listing)
                {{-- názov spoločnosti a info ako mail a webstránka --}}
                <tr class="border-gray-300">
                    <td class="py-2 text-l border-b"><a href="/profilfirma/{{ $listing->id }}" class="hover:text-laravel">{{ $listing->company }}</a>
                    </td>

                    <td class="py-2 text-l border-b">
                        <a href="mailto:{{ $listing->email }}" class="hover:text-laravel">
                            <i class="fa-solid fa-envelope"></i>
                            {{ $listing->email }}</a>
                    </td>

                    <td class="py-2 text-l border-b">
                        <a href="{{ $listing->website }}" target="_blank" class="hover:text-laravel mr-6">
                            <i class="fa-solid fa-globe"></i> {{ $listing->website }} </a>
                    </td>

                    {{-- odstránenie firiem WIP --}}
                    <td class="py-2 text-l border-b">
                        <form method="POST" action="/listings/{{ $listing->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Odstrániť</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                {{-- výpis ak žiadne firmy nie sú v databáze --}}
                <tr class="border-gray-300">
                    <td class="py-2 text-l border-b">
                        <p class="text-center">Nenašli sa žiadne firmy</p>
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