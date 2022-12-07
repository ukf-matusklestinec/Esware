@if (Auth::check() && auth()->user()->Povereny_pracovnik)
<x-layout>

    <a href="/nexus_povereny" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť </a>


    <x-card class="p-10 max-w-6xl mx-auto mt-6">
        <header>
            <h1 class="text-2xl text-center font-bold mb-6">
                Zoznam praxí na schválenie
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
                @unless($listings->isEmpty())
                @foreach ($listings as $prax)
                <tr class="border-gray-300">
                    <td class="py-2 text-l border-b">
                        {{ $prax->title }}
                    </td>


                    {{-- zobrazenie info praxe --}}
                    <td class="py-2 text-l border-b">
                        <a href="/listings/{{ $prax->id }}" class="hover:text-black"> Zobrazenie pracovnej ponuky </a>
                    </td>

                    {{-- tlačidlo, ktoré schváli danú prax --}}
                    <td class="py-2 text-l border-b">
                        <form method="POST" action="/zoznam_praxi/{{ $prax->id }}">
                            @csrf
                            @method('PUT')
                            <button class="text-green-500 hover:text-white"><i class="fa fa-check"></i> Schváliť </button>
                        </form>
                    </td>

                    {{-- odstránenie ponuky praxe --}}
                    <td class="py-2 text-l border-b">
                        <form method="POST" action="/zoznam_praxi/{{ $prax->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-white"><i class="fa-solid fa-trash"></i> Odstrániť</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                {{-- výpis ak žiadne praxe nie sú v databáze --}}
                <tr class="border-gray-300">
                    <td class="py-2 text-l border-b">
                        <p class="text-center">Nenašli sa žiadne ponuky praxe</p>
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


{{-- slúži na schválenie praxí pridanými inými používateľmi --}}