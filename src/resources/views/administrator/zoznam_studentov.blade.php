@if (Auth::check() && auth()->user()->Admin | auth()->user()->Veduci_pracoviska | auth()->user()->Povereny_pracovnik)
    <x-layout>

        <a href="javascript:history.back()"
            class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i
                class="fa-solid fa-arrow-left"></i> Naspäť </a>


        <x-card class="p-10 max-w-6xl mx-auto mt-6">
            <header>
                <h1 class="text-2xl text-center font-bold mb-6">
                    Zoznam študentov
                </h1>
            </header>
            <style>
                #myInput {
                    background-image: url('/css/searchicon.png');
                    /* Add a search icon to input */
                    background-position: 10px 12px;
                    /* Position the search icon */
                    background-repeat: no-repeat;
                    /* Do not repeat the icon image */
                    width: 100%;
                    /* Full-width */
                    font-size: 16px;
                    /* Increase font-size */
                    padding: 12px 20px 12px 40px;
                    /* Add some padding */
                    border: 1px solid #ddd;
                    /* Add a grey border */
                    margin-bottom: 12px;
                    /* Add some space below the input */
                }
            </style>

            <script>
                function myFunction() {
                    // Declare variables
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[1];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Vyhľadať odbor..">
            <table id="myTable" class="w-full table-auto rounded-sm">
                <thead>
                    <th col-index=1>Meno</th>
                    <th col-index=2>Odbor</th>
                    <th col-index=3>Zobraziť</th>
                    @if (auth()->user()->Admin == 1)
                        <th col-index=4>Odstrániť</th>
                    @endif
                </thead>

                <tbody>
                    @unless($users->isEmpty())
                        @foreach ($users as $user)
                            <tr class="border-gray-300">
                                <td class="py-2 text-l border-b"><a class="hover:text-red-500"
                                        href="/profil/{{ $user->id }}">{{ $user->name }}</a>
                                </td>

                                {{-- odbor študenta --}}
                                <td class="py-2 text-l border-b">
                                    {{ $user->odbor }}
                                </td>

                                {{-- zobrazenie jeho praxe TREBA OPRAVIŤ AK NEMÁ ŽIADNE PONUKY --}}

                                <td class="py-2 text-l border-b">
                                    <a href="/listings/{{ $user->id }}" class="text-green-500 hover:text-white"><i
                                            class="fa-solid fa-display"></i> Zobraziť prax</a>
                                </td>
                                @if (auth()->user()->Admin == 1)
                                    {{-- odstránenie používateľa, len pre admina --}}
                                    <td class="py-2 text-l border-b">
                                        <form method="POST" action="/zoznam_studentov/{{ $user->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-500 hover:text-white"><i class="fa-solid fa-trash"></i>
                                                Odstrániť</button>
                                        </form>
                                    </td>
                                @endif()
                            </tr>
                        @endforeach
                    @else
                        {{-- výpis ak žiadny študenti nie sú v databáze --}}
                        <tr class="border-gray-300">
                            <td class="py-2 border-b text-l">
                                <p class="text-center">Nenašli sa žiadny študenti</p>
                            </td>
                        </tr>
                    @endunless

                </tbody>
            </table>

            <!-- <script>
                getUniqueValuesFromColumn()
            </script> -->
            <script>
                window.onload = () => {
                    console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
                };

                getUniqueValuesFromColumn()
            </script>

        </x-card>
    </x-layout>
@else
    Nemáte prístup!
@endunless
