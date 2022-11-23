@if (Auth::check() && auth()->user()->Povereny_pracovnik)
    <x-layout>

        <a href="/nexus_povereny" class="inline-block text-black ml-4 mb-4">
            <i class="fa-solid fa-arrow-left"></i> Naspäť
        </a>

        <x-card class="p-10">

            <header>
                <h1 class="text-3xl text-center font-bold my-6 uppercase">
                    Zoznam prihlásených organizácií a firiem
                </h1>
            </header>

            <table class="w-full table-auto rounded-sm">
                <tbody>
                    @unless($listings->isEmpty())
                        @foreach ($listings as $listing)
                            {{-- názov spoločnosti a info ako mail a webstránka --}}
                            <tr class="border-gray-300">
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    {{ $listing->company }}
                                </td>

                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a href="mailto:{{ $listing->email }}" class="text-laravel">
                                        <i class="fa-solid fa-envelope"></i>
                                        {{ $listing->email }}</a>
                                </td>

                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a href="{{ $listing->website }}" target="_blank" class="text-laravel mr-6">
                                        <i class="fa-solid fa-globe"></i> {{ $listing->website }} </a>
                                </td>

                            </tr>
                        @endforeach
                    @else
                        {{-- výpis ak žiadne firmy nie sú v databáze --}}
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
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
