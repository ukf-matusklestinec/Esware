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
<p><strong>Potvrdenie o absolvovaní odbornej praxe</strong></p>
@foreach($meno as $meno2)
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fakulta prírodných vied a informatiky Univerzita Konštantína Filozofa v Nitre
    potvrdzuje, že <strong>{{$meno2->name}}</strong>, študent odboru: {{$meno2->odbor}} je podla zákona c. 131/2002 Z. z. o vysokých školách a o
    zmene&nbsp; a doplnení niektorých zákonov v znení neskorších predpisov v akademickom roku, absolvoval odbornú prax vo vybranej firme nad minimálny rozsah 160 hodín.</p>
@endforeach
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

{{-- dokument, ktorý si môže študent stiahnúť ako potvrdenie za absolvovanie praxe--}}
