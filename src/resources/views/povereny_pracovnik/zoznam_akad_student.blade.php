@if (Auth::check() && auth()->user()->Povereny_pracovnik)
<x-layout>

    <a href="/nexus_povereny" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť </a>

    <x-card class="p-10 max-w-4xl mx-auto mt-6">
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

            #myTable {
                border-collapse: collapse;
                /* Collapse borders */
                width: 100%;
                /* Full-width */
                border: 1px solid #ddd;
                /* Add a grey border */
                font-size: 18px;
                /* Increase font-size */
            }

            #myTable th,
            #myTable td {
                text-align: center;
                /* Left-align text */
                padding: 12px;
                /* Add padding */
            }

            #myTable tr {
                /* Add a bottom border to all table rows */
                border-bottom: 1px solid #ddd;
            }

            #myTable tbody tr:hover {
                /* Add a blue background color to the table on hover */
                background-color: rgb(45, 87, 239);
                color: white;
            }
            #myTable a:hover{
                color: white;
            }
        </style>

        <script>
            function searchTableColumns() {
                var input, filter, table, tr, i, j, column_length, count_td;
                column_length = document.getElementById('myTable').rows[0].cells.length;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                count_td = 0;
                for(j = 0; j < column_length-1; j++){ 
                    td = tr[i].getElementsByTagName("td")[j];
                    
                    if (td) {
                        if ( td.innerHTML.toUpperCase().indexOf(filter) > -1)  {            
                        count_td++;
                        }
                    }
                }
                if(count_td > 0){
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
                
            }
        </script>

        <input class="form-control" type="text" id="myInput" placeholder="Hľadať ..." onkeyup="searchTableColumns()">

        <table id="myTable" class="w-full table-auto rounded-sm">
            <tbody>
                @unless($users->isEmpty())
                @foreach ($users as $user)
                <tr class="border-gray-300">
                    <td class="py-2 text-l border-b">
                        <a class="hover:text-laravel" href="/profil/{{ $user->id }}">{{ $user->name }}</a>
                    </td>

                    {{-- odbor študenta --}}
                    <td class="py-2 text-l border-b">
                        {{ $user->odbor }}
                    </td>

                    {{-- zobrazenie jeho praxe TREBA OPRAVIŤ AK NEMÁ ŽIADNE PONUKY --}}

                    <td class="py-2 text-l border-b">
                        <a href="/listings/{{ $user->id }}" class="hover:text-laravel"> Zobrazenie pracovnej ponuky </a>
                    </td>

                </tr>
                @endforeach
                @else
                {{-- výpis ak žiadny študenti nie sú v databáze --}}
                <tr class="border-gray-300">
                    <td class="py-2 text-l border-b">
                        <p class="text-center">Nenašli sa žiadny študenti</p>
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