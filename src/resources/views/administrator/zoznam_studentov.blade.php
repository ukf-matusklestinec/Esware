
<x-layout>
    <x-card class="p-10">
{{-- pridať searchbar --}}
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Zoznam študentov
            </h1>
        </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>

            {{-- výpis ak žiadny študenti nie sú v databáze --}}
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <p class="text-center">Nenašli sa žiadny študenti</p>
                </td>
            </tr>


        </tbody>
    </table>
    </x-card>
</x-layout>
