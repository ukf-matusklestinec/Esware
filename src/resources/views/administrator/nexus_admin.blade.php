@if (Auth::check() && auth()->user()->Admin)
    <x-layout>

        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Administratívny nexus
            </h1>
        </header>
        {{--    buttons ************************************************************************************************************** --}}

        <body>
            <div class="lg:grid lg:grid-cols-4 gap-4 space-y-4 md:space-y-0 mx-4">

                <x-card>
                    <div class="flex justify-center">
                        <form action="/zoznam_studentov">
                            <button type="submit" class="text-xl font-bold hover:text-laravel ">
                                Spravovať študentov
                            </button>
                        </form>
                    </div>
                </x-card>

                <x-card>
                    <div class="flex justify-center">
                        <form action="/zoznam_veducich">
                            <button type="submit" class="text-xl font-bold  hover:text-laravel">
                                Spravovať vedúcich pracovísk
                            </button>
                        </form>
                    </div>
                </x-card>

                <x-card>
                    <div class="flex justify-center">
                        <form action="/zoznam_pracovnikov">
                            <button type="submit" class="text-xl font-bold  hover:text-laravel">
                                Spravovať poverených pracovníkov pracovísk
                            </button>
                        </form>
                    </div>
                </x-card>

                <x-card>
                    <div class="flex justify-center">
                        <form action="/zoznam_firiem">
                            <button type="submit" class="text-xl font-bold hover:text-laravel">
                                Spravovať zoznam firiem a organizácií
                            </button>
                        </form>
                    </div>
                </x-card>

            </div>
        </body>


        <br>
        <br>
        {{-- stiahnutie reportu --}}
        <div class="flex flex-col justify-center items-center">
            <div class="text-lg space-y-6 text-center">
                <a href="/report_download" download
                    class="block bg-laravel text-white py-2 rounded-xl w-96 hover:opacity-80">
                    <i class="fa-solid fa-file-pdf"></i>
                    Stiahnuť report</a>
            </div>
        </div>


        {{-- grafy 1-2 ****************************************************************************************************************************** --}}
        <br>
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            <x-card>
                <div class="col-md-12">
                    <canvas id="myChart"></canvas>
                </div>
            </x-card>

            <x-card>
                <div class="col-md-12">
                    <canvas id="myChart2"></canvas>
                </div>
            </x-card>
        </div>
        {{--    grafy 3-6 ****************************************************************** --}}
        <br>
        <div class="lg:grid lg:grid-cols-4 gap-4 space-y-4 md:space-y-0 mx-4">
            <x-card>
                <div class="col-md-12">
                    <canvas id="myChart3"></canvas>
                </div>
            </x-card>

            <x-card>
                <div class="col-md-12">
                    <canvas id="myChart4"></canvas>
                </div>
            </x-card>

            <x-card>
                <div class="col-md-12">
                    <canvas id="myChart5"></canvas>
                </div>
            </x-card>

            <x-card>
                <div class="col-md-12">
                    <canvas id="myChart6"></canvas>
                </div>
            </x-card>
        </div>
        <br>
        <div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-0 mx-4">
            <x-card>
                <div class="col-md-12">
                    <canvas id="myChartX"></canvas>
                </div>
            </x-card>
        </div>
        {{--    data pre grafy ****************************************************************************************************************************** --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Nitra', 'Vráble', 'Zvolen', 'Levice', 'Žilina', 'Bratislava'],
                    datasets: [{
                        label: '# Mestá ponúk',
                        data: [{{ $nitra }}, {{ $vrable }}, {{ $zvolen }},
                            {{ $levice }}, {{ $zilina }}, {{ $bratislava }}
                        ],
                        backgroundColor: [
                            'rgba(255,7,7,0.4)',
                            'rgba(10,96,245,0.4)',
                            'rgba(26,248,10,0.4)',
                            'rgba(15,245,245,0.4)',
                            'rgba(89,9,245,0.4)',
                            'rgba(241,230,12,0.4)'
                        ],
                        borderColor: [
                            'rgba(255,7,7)',
                            'rgba(10,96,245)',
                            'rgba(26,248,10)',
                            'rgba(15,245,245)',
                            'rgba(89,9,245)',
                            'rgba(241,230,12)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            var ctx = document.getElementById("myChartX").getContext('2d');
            var myChartX = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Informatika aplikovaná', 'Informatika učiteľstvo', 'Fyzika', 'Fyzika materialov',
                        'Fyzika učiteľstvo', 'Matematika učiteľstvo',
                        'Informačné metódy v ekonómii a finančníctve', 'Geografia v regionálnom rozvoji',
                        'Geografia učiteľstvo', 'Chemia učiteľstvo', 'Biologia', 'Biologia učiteľstvo'
                    ],
                    datasets: [{
                        label: '# Mestá ponúk',
                        data: [{{ $IA }}, {{ $IU }}, {{ $F }},
                            {{ $FM }}, {{ $FU }}, {{ $MU }},
                            {{ $IMEF }}, {{ $G }}, {{ $GU }},
                            {{ $CHU }}, {{ $B }}, {{ $BU }}
                        ],
                        backgroundColor: [
                            'rgba(255,7,7,0.4)',
                            'rgba(10,96,245,0.4)',
                            'rgba(26,248,10,0.4)',
                            'rgba(15,245,245,0.4)',
                            'rgba(89,9,245,0.4)',
                            'rgba(241,230,12,0.4)',

                            'rgba(255,7,7,0.4)',
                            'rgba(10,96,245,0.4)',
                            'rgba(26,248,10,0.4)',
                            'rgba(15,245,245,0.4)',
                            'rgba(89,9,245,0.4)',
                            'rgba(241,230,12,0.4)'
                        ],
                        borderColor: [
                            'rgba(255,7,7)',
                            'rgba(10,96,245)',
                            'rgba(26,248,10)',
                            'rgba(15,245,245)',
                            'rgba(89,9,245)',
                            'rgba(241,230,12)',

                            'rgba(255,7,7)',
                            'rgba(10,96,245)',
                            'rgba(26,248,10)',
                            'rgba(15,245,245)',
                            'rgba(89,9,245)',
                            'rgba(241,230,12)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            var ctx = document.getElementById("myChart2").getContext('2d');
            var myChart2 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Admin', 'Veduci pracoviska', 'Povereny pracovnik', 'Zastupca firmy'],
                    datasets: [{
                        label: '# Role zamestnancov',
                        data: [{{ $admin }}, {{ $veduci }}, {{ $povereny }},
                            {{ $zastupca }}
                        ],
                        backgroundColor: [
                            'rgba(89,9,245,0.4)',
                            'rgba(241,230,12,0.4)',
                            'rgba(15,245,245,0.4)',
                            'rgba(255,7,7,0.4)',
                        ],
                        borderColor: [
                            'rgba(89,9,245)',
                            'rgba(241,230,12)',
                            'rgba(15,245,245)',
                            'rgba(255,7,7)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            //grafy 3-6 ******************************************************************************************************************************
            var ctx = document.getElementById("myChart3").getContext('2d');
            var myChart3 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Muž', 'Žena', 'Nezvolené'],
                    datasets: [{
                        label: '# Pohlavie použivateľov',
                        data: [{{ $muz }}, {{ $zena }}, {{ $nezvolene }}],
                        backgroundColor: [
                            'rgba(16,132,255,0.4)',
                            'rgba(250,33,178,0.4)',
                            'rgba(1,4,23,0.4)'
                        ],
                        borderColor: [
                            'rgba(16,132,255)',
                            'rgba(250,33,178)',
                            'rgba(1,4,23)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            var ctx = document.getElementById("myChart4").getContext('2d');
            var myChart4 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Študnet', 'Zamestnanec'],
                    datasets: [{
                        label: '# Počet študnetov a zamestnacov',
                        data: [{{ $student }}, {{ $zamestnanec3 }}],
                        backgroundColor: [
                            'rgba(36,255,20,0.4)',
                            'rgba(253,7,7,0.4)'
                        ],
                        borderColor: [
                            'rgb(36,255,20)',
                            'rgb(253,7,7)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            var ctx = document.getElementById("myChart5").getContext('2d');
            var myChart5 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Aktívna', 'Neaktívna'],
                    datasets: [{
                        label: '# Počet aktivných a neaktivných praxí študentov',
                        data: [{{ $aktivna }}, {{ $neaktivna }}],
                        backgroundColor: [
                            'rgba(36,255,20,0.4)',
                            'rgba(253,7,7,0.4)'
                        ],
                        borderColor: [
                            'rgb(36,255,20)',
                            'rgb(253,7,7)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            var ctx = document.getElementById("myChart6").getContext('2d');
            var myChart6 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Schvalená', 'Neschvalena'],
                    datasets: [{
                        label: '# Počet schvalenych a neschvalenych ponúk',
                        data: [{{ $schvalena }}, {{ $neschvalena }}],
                        backgroundColor: [
                            'rgba(36,255,20,0.4)',
                            'rgba(253,7,7,0.4)'
                        ],
                        borderColor: [
                            'rgb(36,255,20)',
                            'rgb(253,7,7)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        xAxes: [],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
        <br>
        <br>
        <br>
        <br>


    </x-layout>
@else
    Nemáte prístup!
@endunless
{{-- treba dorobiť inputy --}}
