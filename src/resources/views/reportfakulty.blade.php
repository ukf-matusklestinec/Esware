<div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">
    <div>
        <img style="float: left;"src="https://www.ef.umb.sk/fr/www.iufs.sk/images/logos/ukf.png" alt="" width="150" height="150" />
    </div>
    <div>
        <img style="float: right;" src="https://cdn.webnoviny.sk/sites/2/2020/02/logo-fakulta-prirodnych-vied-ukf-nitra.jpg" alt="" width="150" height="150" />
    </div>
    <div>
        <p style="text-align: center;"><strong>Univerzita Konštantína Filozofa v Nitre </strong></p>
        <p style="text-align: center;"><strong>Fakulta prírodných vied a informatiky</strong></p>
        <p style="text-align: center;">Tr. A. Hlinku 1, 938 05 Nitra</p>
        <p style="text-align: center;">Telefón: +421 37 5526 485, +421 37 9986 412</p>
    </div>
</div>
<p><strong>Štatistika pre aktuálny mesiac</strong></p>

{{--<p style="font-size:20px; text-align: center">This is a paragraph.</p>--}}
    <table style="width: 100%; border-collapse: collapse;" border="1">
        <tbody>
        <tr>
            <td style="width: 14.2857%; text-align: center;">Celkovo registrovaných študentov</td>
            <td style="width: 14.2857%; text-align: center;">Katedra informatiky</td>
            <td style="width: 14.2857%; text-align: center;">Katedra fyziky</td>
            <td style="width: 14.2857%; text-align: center;">Katedra botaniky a genetiky</td>
            <td style="width: 14.2857%; text-align: center;">Katedra geografie</td>
            <td style="width: 14.2857%; text-align: center;">Katedra chémie</td>
            <td style="width: 14.2857%; text-align: center;">Katedra matematiky</td>
        </tr>
        <tr>
            <td style="width: 14.2857%; text-align: center;">{{$count_vsetko}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$count_ai}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$count_fy}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$count_bi}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$count_ge}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$count_ch}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$count_ma}}</td>
        </tr>

        <tr>
            <td style="width: 14.2857%; text-align: center;">Prihlásený na ponukách</td>
            <td style="width: 14.2857%; text-align: center;">Odhlasení z ponúk</td>
            <td style="width: 14.2857%; text-align: center;">Schvalené ponuky</td>
            <td style="width: 14.2857%; text-align: center;">Neschvalené ponuky</td>
            <td style="width: 14.2857%; text-align: center;">Pocet pridaných aktivít</td>
            <td style="width: 14.2857%; text-align: center;">Hodín odrobených na ponukách</td>
            <td style="width: 14.2857%; text-align: center;">Archivované ponuky</td>

        </tr>
        <tr>
            <td style="width: 14.2857%; text-align: center;">{{$pri}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$odh}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$sch_ano}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$sch_nie}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$count_akt}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$count_akt_hod}}</td>
            <td style="width: 14.2857%; text-align: center;">{{$count_archiv}}</td>
        </tr>
        </tbody>
    </table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Nitra, dna: {{$time}}</p>


<p><img style="float: right;" src="https://i.gyazo.com/199d1549fdc43ebabaadb922d4628bd2.png" alt="" width="370" height="134" /></p>

<script>
    date = new Date();
    year = date.getFullYear();
    month = date.getMonth() + 1;
    day = date.getDate();
    document.getElementById("current_date").innerHTML = day + "/" + month + "/" + year;
</script>

{{-- vygeneruje pdf, ktorý slúži ako report za fakulty--}}
