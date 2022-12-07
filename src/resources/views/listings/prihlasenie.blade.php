@if (Auth::check() && auth()->user()->Veduci_pracoviska | auth()->user()->Admin | auth()->user()->Povereny_pracovnik)
    <x-layout>

        <a href="javascript:history.back()"
            class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i
                class="fa-solid fa-arrow-left"></i> Naspäť
        </a>


        <x-card class="p-10 max-w-auto mx-auto mt-6">
            <header>

                <h1 class="text-2xl text-center font-bold mb-6">
                    Monitorovanie ponúk
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


            {{-- @include('partials._search') --}}

            <input class="form-control" type="text" id="myInput" placeholder="Hľadať ..." onkeyup="searchTableColumns()">

            <table id="myTable" class="w-full table-auto rounded-sm">
                <thead>
                    @unless($aktivity2->isEmpty())
                        <tr>
                            <th>Ponuka</th>
                            <th>Firma</th>
                            <th>Študent</th>
                            <th>Aktívna prax</th>
                            <th>Spätná väzba</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aktivity2 as $aktivit)
                            <tr class="border-gray-300">
                                <td class="py-2 text-l border-b text-center">
                                    {{ $aktivit->listing->title }}
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    {{ $aktivit->listing->company }}
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    <a class="hover:text-red-500"
                                        href="/profil/{{ $aktivit->user->id }}">{{ $aktivit->user->name }}</a>
                                    <a href="/aktivity/{{ $aktivit->id }}">
                                        {{-- zobrazí aktivitu daného študenta --}}
                                        <i class="fa fa-user-plus text-green-500 hover:text-black" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    @if ($aktivit->aktivna == 1)
                                        Áno
                                    @else
                                        Nie
                                    @endif
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    @if ($aktivit->spatna_vazba == null)
                                        Žiadna spätná väzba.
                                    @else
                                        {{ $aktivit->spatna_vazba }}
                                    @endif
                                </td>

                                @if(auth()->user()->Povereny_pracovnik)
                                <td class="py-2 text-l border-b text-center">
                                    <a href="/prihlasenie/{{ $aktivit->id }}/edit"
                                        class="text-blue-400 px-6 py-2 rounded-xl hover:text-white"><i
                                            class="fa-solid fa-pen-to-square"></i> Edit</a>
                                </td>
                                <td class="py-2 text-l border-b text-center">
                                    <form method="POST" action="/prihlasenie/{{ $aktivit->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-500 hover:text-white"><i class="fa-solid fa-trash"></i>
                                            Odstrániť </button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr class="border-gray-300">
                            <td class="py-2 text-l border-b text-center">
                                <p class="text-center">Študenti nie sú prihlásení na žiadnej ponuke</p>
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
{{--  zástupcu firmy alebo organizácie ohľadom pracovnej ponuky --}}
