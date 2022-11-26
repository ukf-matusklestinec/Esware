@if (Auth::check() && auth()->user()->Veduci_pracoviska)
    <x-layout>

        <a href="javascript:history.back()"
           class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i
                class="fa-solid fa-arrow-left"></i> Naspäť
        </a>
        <br>

        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th,
            td {
                padding: 8px;
                text-align: center;
                border-bottom: 1px solid rgb(0, 0, 0);
            }

            tr:hover {
                background-color: rgb(226, 235, 129);
            }
        </style>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($listings->isEmpty())
                    @foreach ($listings as $listing)
                        {{-- názov spoločnosti a info ako mail a webstránka --}}
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">

                                <a href="/listings/{{ $listing->id }}"> {{ $listing->company }}</a>

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
    </x-layout>
@else
    Nemáte prístup!
@endunless
