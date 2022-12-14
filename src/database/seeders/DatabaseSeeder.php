<?php

namespace Database\Seeders;


use App\Models\Aktivity;
use App\Models\Prihlasenie;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(36)->create();
        /*
                $user = User::factory()->create([
                    'name' => 'John Doe',
                    'email' => 'john@gmail.com'
                ]);

                Listing::factory(6)->create([
                    'user_id' => $user->id
                ]);
        */
        //admin*******************************************
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'Admin' => '1',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '0',
        ]);
        //veduci*******************************************
        User::create([
            'name' => 'Geografia',
            'email' => 'Geografia@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '1',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '0',
        ]);
        User::create([
            'name' => 'Matematika',
            'email' => 'Matematika@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '1',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '0',
        ]);
        User::create([
            'name' => 'Biologia',
            'email' => 'Biologia@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '1',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '0',
        ]);
        User::create([
            'name' => 'Chemia',
            'email' => 'Chemia@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '1',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '0',
        ]);
        User::create([
            'name' => 'Informatika',
            'email' => 'Informatika@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '1',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '0',
        ]);
        User::create([
            'name' => 'Fyzika',
            'email' => 'Fyzika@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '1',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '0',
        ]);
        //povereny*******************************************
        User::create([
            'name' => 'pov1',
            'email' => 'pov1@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '1',
            'Zastupca_firmy' => '0',
        ]);
        User::create([
            'name' => 'pov2',
            'email' => 'pov2@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '1',
            'Zastupca_firmy' => '0',
        ]);
        User::create([
            'name' => 'pov3',
            'email' => 'pov3@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '1',
            'Zastupca_firmy' => '0',
        ]);
        User::create([
            'name' => 'pov4',
            'email' => 'pov4@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '1',
            'Zastupca_firmy' => '0',
        ]);User::create([
        'name' => 'pov5',
        'email' => 'pov5@gmail.com',
        'password' => '123456',
        'Admin' => '0',
        'Veduci_pracoviska' => '0',
        'Povereny_pracovnik' => '1',
        'Zastupca_firmy' => '0',
    ]);
        User::create([
            'name' => 'pov6',
            'email' => 'pov6@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '1',
            'Zastupca_firmy' => '0',
        ]);
        User::create([
            'name' => 'pov7',
            'email' => 'pov7@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '1',
            'Zastupca_firmy' => '0',
        ]);
        User::create([
            'name' => 'pov8',
            'email' => 'pov8@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '1',
            'Zastupca_firmy' => '0',
        ]);
        //zastupca*******************************************
        User::create([
            'name' => 'zas1',
            'email' => 'zas1@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '1',
        ]);
        User::create([
            'name' => 'zas2',
            'email' => 'zas2@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '1',
        ]);
        User::create([
            'name' => 'zas3',
            'email' => 'zas3@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '1',
        ]);
        User::create([
            'name' => 'zas4',
            'email' => 'zas4@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '1',
        ]);User::create([
        'name' => 'zas5',
        'email' => 'zas5@gmail.com',
        'password' => '123456',
        'Admin' => '0',
        'Veduci_pracoviska' => '0',
        'Povereny_pracovnik' => '0',
        'Zastupca_firmy' => '1',
    ]);
        User::create([
            'name' => 'zas6',
            'email' => 'zas6@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '1',
        ]);
        User::create([
            'name' => 'zas7',
            'email' => 'zas7@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '1',
        ]);
        User::create([
            'name' => 'zas8',
            'email' => 'zas8@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '1',
        ]);
        User::create([
            'name' => 'zas9',
            'email' => 'zas9@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '1',
        ]);
        User::create([
            'name' => 'zas10',
            'email' => 'zas10@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '1',
        ]);
        User::create([
            'name' => 'zas11',
            'email' => 'zas11@gmail.com',
            'password' => '123456',
            'Admin' => '0',
            'Veduci_pracoviska' => '0',
            'Povereny_pracovnik' => '0',
            'Zastupca_firmy' => '1',
        ]);
//********************************************************************************************************************************************************************************************
        Listing::create([
            'user_id' => '1',
            'title' => 'IT Analytik',
            'logo' => 'logos/unicorn.png',
            'tags' => 'SQL, XML, UML',
            'company' => 'Unicorn',
            'location' => 'Vrable',
            'email' => 'unicorn@gmail.com',
            'website' => 'https://www.spolu-pracujeme.sk/',
            'tel_cislo' => '0948777643',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Do n????ho t??mu h??ad??me analytika, ktor?? sa neboj?? "chopi??" technickej anal??zy. Cie??om projektu s?? konzult??cie ku architektonick??m n??vrhom a implement??ci?? ESB rie??enia na platforme IBM WebSphere ESB.

H??ad??me kolegu, ktor?? u?? m?? sk??senosti s anal??zou, no z??rove?? m?? chu?? nau??i?? sa nie??o nov??. Do detailov tejto pr??ce ??a radi za??kol??me.
N??pl?? pr??ce:
???	Rev??zia architektonick??ch konceptov.
???	Rev??zia implement??cie.
???	Performance tuning pre SEPA rie??enie.
???	Performance testy - konzult??cie pri nasadzovan?? ESB do prev??dzky.
???	Konzult??cie k designu slu??ieb.
???	V ??al??ej f??ze sa realizuje pr??pravn?? f??za pre integr??ciu korpor??tneho bankovn??ctva.

'
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => '.NET Developer',
            'logo' => 'logos/fpt.png',
            'tags' => 'NET, C#, Azure, Data',
            'company' => 'FPT Slovakia',
            'location' => 'Nitra',
            'email' => 'juliana@fptsvk.com',
            'website' => 'https://www.fpt.sk/',
            'tel_cislo' => '0948564231',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'We are looking for a .NET Backend Developer for the development and maintenance of applications for our customer in a renewables area for the project Edge2Cloud / Near Real Time (NRT). We are looking for an experienced back-end developer experienced with C# .NET and data processing services offered by Azure Cloud to facilitate data transfer between microservices, databases and Azure Data Lake storage. This developer will join an ongoing project and be integrated with the current product team.   Edge2Cloud web interface gives monitoring capabilities of data flow, data completeness, building site dashboards, extract data from the site. Place of work:
Remote work'
        ]);

        Listing::create([
            'user_id' => '2',
            'title' => 'D??tov??/-?? analytik/-??ka',
            'logo' => 'logos/csob.png',
            'tags' => 'SQL, Oracle, PowerBI',
            'company' => '??SOB',
            'location' => 'Zvolen',
            'email' => 'csob@gmail.com',
            'website' => 'https://www.csob.cz/portal/',
            'tel_cislo' => '0948244278',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Do n????ho teamu h??ad??me sk??sen??ho analytika, s ve??k??m zmyslom pre presnos?? a detail. Ak vie?? navy??e pochopi?? reportingov?? v??stupy aj z business poh??adu, pri rie??en?? zlo??itej????ch ??loh??ch vie?? navrhova?? rie??enia, uva??ova?? procesne a koncep??ne, h??ad??me teba.
Hlavn?? pracovn?? n??pl??:
??pecializovan?? reportovanie d??t kontaktn??ho centra.
Anal??za, interpret??cia a vizualiz??cia d??t ??? h??ad??me niekoho, kto vie v??stupy dobre pochopi?? aj z business poh??adu a na z??klade toho nastavi?? formu reportov tak, aby mali ??o najv??????iu v??povedn?? hodnotu'
        ]);

        Listing::create([
            'user_id' => '2',
            'title' => 'Java developer - junior',
            'logo' => 'logos/csob.png',
            'tags' => 'Java, JavaScript',
            'company' => '??SOB',
            'location' => 'Nitra',
            'email' => 'csob1@gmail.com',
            'website' => 'https://www.csob.cz/portal/',
            'tel_cislo' => '0948856355',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Chce?? vyv??ja?? kvalitn?? aplik??cie a softv??rov?? rie??enia na Java technol??gi??ch?
Chce?? pracova?? v medzin??rodnom teame program??torov, z??skava?? sk??senosti a popritom vyu????va?? anglick?? jazyk? Ak je odpove?? ??no, mo??no h??ad??me pr??ve teba!
Pon??kame ti pr??stup k modern??m bankov??m technol??gi??m a mo??nos?? by?? s????as??ou agiln??ho SCRUM t??mu.
N??pl?? pr??ce:
Vyv??ja?? kvalitn?? aplik??cie a softv??rov?? rie??enia na Java technol??gi??ch.
Akt??vne navrhova?? a implementova?? funk??n?? a technick?? vylep??enia.
Pou????va?? osved??en?? postupy v oblasti v??voja softv??ru.
Pracova?? s mana??mentom na vylep??ovan?? v??vojov??ch a testovac??ch procesov.'
        ]);

        Listing::create([
            'user_id' => '2',
            'title' => 'Tester',
            'logo' => 'logos/manpower.png',
            'tags' => 'Microsoft, Java',
            'company' => 'ManpowerGroup s.r.o.',
            'location' => 'Levice',
            'email' => 'Manpower@gmail.com',
            'website' => 'https://www.manpowergroup.cz',
            'tel_cislo' => '0948425663',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'N??pl?? pr??ce, pravomoci a zodpov??dnosti
N???? klient od roku 2016 pracuje na projektu pro Finskou celn?? spr??vu. Jedn?? se o ??e??en?? elektronick??ho celnictv?? eCustoms a pat???? k jedn?? z nejsofistikovan??j????ch a  nejspolehliv??j????ch implementac?? celn??ho syst??mu v cel?? EU.
Budete pracovat v men????m, agiln?? funguj??c??m t??m?? FE a BE v??voj?????? a tester??, kte???? jsou ??zce propojeni s Business analytiky a Product Ownerem.

Budete se pod??let na rozvoji mezin??rodn??ho product eCustoms, postaven??m  na Microsoft platform?? s pou??it??m Model Driven Architecture.'
        ]);

        Listing::create([
            'user_id' => '2',
            'title' => 'IT business analytik',
            'logo' => 'logos/trigon.png',
            'tags' => 'SQL, UML',
            'company' => 'TRIGON Consulting s.r.o.',
            'location' => 'Levice',
            'email' => 'vadyova@trigon-consulting.sk',
            'website' => 'https://www.trigon-consulting.sk/o_nas/',
            'tel_cislo' => '0948456778',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'N??pl?? pr??ce, pr??vomoci a zodpovednosti
Do rozrastaj??ceho sa t??mu n????ho klienta h??ad??me kandid??ta/kandid??tku na poz??ciu IT business analytik.

Na????m klientom je dlhodobo ??spe??n?? slovensk?? spolo??nos??, ktor?? pre svojich z??kazn??kov poskytuje komplexn?? rie??enia a slu??by u?? viac ako 30 rokov. Tvor?? informa??n?? syst??my, ktor?? zabezpe??uj?? nepretr??it?? fungovanie v??znamn??ch spolo??nost?? a ??t??tnych organiz??ci??. V portf??liu m?? projekty, ktor?? vy??aduj?? vysok?? profesionalitu po projektovej, analytickej a program??torskej str??nke - digit??lne arch??vy, informa??n?? syst??my, rie??enia biznis inteligencie, elektronick?? dispe??ingy a in??.

Podstatou tejto pracovnej poz??cie je zis??ovanie a ??pecifik??cia po??iadaviek z??kazn??ka a ich n??sledn?? interpret??cia implementa??n??mu t??mu dan??ho SW.

Medzi Va??e typick?? ??innosti na tejto poz??cii patr?? najm??:

??? Anal??za a ??pecifik??cia po??iadaviek z??kazn??ka,
??? Tvorba projektovej a pou????vate??skej dokument??cie,
??? N??vrh rie??en??,
??? UML modelovanie,
??? Datab??zov?? modelovanie,
??? Tvorba SQL skriptov,
??? Anal??za zdrojov??ho k??du (znalos?? princ??pov OOP ??? objektovo orientovan??ho programovania).

Ide??lnym kandid??tom na tejto poz??cii je ??lovek, ktor?? sa chce neust??le vzdel??va??. N???? klient V??m vie poskytn???? potrebn?? za??kolenie a v tejto pr??ci budete v??dy c??ti?? z??ujem a d??veru svojich nadriaden??ch. T??to poz??cia je vhodn?? pre kandid??ta, ktor?? ocen?? pr??cu s najnov????mi technol??giami, dobr?? kolekt??v ako aj mo??nos?? uplatni?? svoje n??pady. M????ete sa sta?? s????as??ou ??pi??kov??ho t??mu odborn??kov, nad??encov do techniky, ale najm?? v??born??ch kolegov.'
        ]);

        Listing::create([
            'user_id' => '3',
            'title' => 'AUTOMATION ENGINEER',
            'logo' => 'logos/telekom.png',
            'tags' => 'Data, AWS, C#, NET',
            'company' => 'Telekom',
            'location' => 'Nitra',
            'email' => 'telekom@gmail.com',
            'website' => 'https://www.telekom.sk',
            'tel_cislo' => '0948778652',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Autonomous End2End delivery and development of complex automation solutions.
??? Analysis of customer requirements and design of tailor-made automation solution.
??? Process analysis and identification of automation opportunities.
??? Analysis, active search and implementation of advanced technologies.
??? Own, establish and govern the development and operation standards.
??? Initiate and drive R&D for automation solutions like ML/AI, RPA, Smart Data Extraction.
??? Evaluation and realisation of process improvements to ensure cost reduction and increase of efficiency and/or quality.
??? Apply our automation solution portfolio (e.g. Blue Prism, ABBYY Flexicapture).
??? Deliver consulting and trainings in the area of expertise (Automation/ Digitalization/ Innovation and Business Architecture).
??? Creating and maintaining positive customer relationships to ensure future sales.
??? Selling/Promoting products and services using solid arguments to prospective customers. Performing cost-benefit analyses of existing and potential customers.
??? Presenting automation solutions to customers and management.
'
        ]);

        Listing::create([
            'user_id' => '4',
            'title' => 'Pracovn??k IT',
            'tags' => 'SQL, PowerBI',
            'company' => 'WINDOW GLASS, s.r.o.',
            'location' => 'Nitra',
            'email' => 'windowglass@gmail.com',
            'website' => 'https://www.windowglass.sk',
            'tel_cislo' => '0948333456',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'N??pl?? pr??ce, pr??vomoci a zodpovednosti:
Rie??enie potrieb u????vate??ov, udr??iavanie a vylep??ovanie IT n??strojov (software, hardware, datab??zy) a h??adanie mo??nost?? zlep??ovania s cie??om u??etri?? ??as u????vate??om syst??mu.
Reagovanie a odstra??ovanie IT incidentov a proakt??vny pr??stup na predch??dzanie vzniku tak??chto udalost??.
Realiz??cia projektov IT infra??trukt??ry.
Vytv??ranie dokument??cie k jednotliv??m procesom, ??trukt??r??m IT.
Komunik??cia s intern??mi u????vate??mi podnikov??ho SW oh??adne po??iadaviek na funkcionalitu jednotliv??ch modulov SW, ich prvotn?? vyhodnotenie, pr??padn?? n??vrh alternat??vneho rie??enia po??iadaviek.
Zad??vanie po??iadaviek na dod??vate??a podnikov??ho SW oh??adne implement??cie nov??ch rie??en?? a spolupr??ca pri ich implement??cii.
Podpora a s????innos?? pri kontrole funk??nosti jednotliv??ch pracovn??ch postupov v r??mci podnikov??ho SW.
Pr??prava v??stupn??ch reportov z datab??z informa??n??ho syst??mu a s????innos?? pri ??prave tabu??kov??ch modelov pre spracovanie d??t (MS Access, MS Excel, pr??padne Power BI).
SW a HW ??dr??ba po????ta??ov a in??ch zariaden?? v r??mci po????ta??ovej siete.
Pr??cu je mo??n?? po za??kolen?? vykon??va?? aj z domu.'
        ]);

        Listing::create([
            'user_id' => '5',
            'title' => 'Test engineer Junior',
            'logo' => 'logos/certicon.png',
            'tags' => 'Microsoft, TFS',
            'company' => 'CertiCon SK s. r. o.',
            'location' => 'Nitra',
            'email' => 'CertiCon@gmail.com',
            'website' => 'https://www.certicon.cz/?lang=en',
            'tel_cislo' => '0948778652',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'N??pl?? pr??ce, pr??vomoci a zodpovednosti:
V oblasti zdravotn??ctva vyv??jame webov?? slu??bu, ktor?? umo????uje online monitorovanie stavu pacientov, ktor??m bol implantovan?? kardiostimul??tor alebo defibril??tor. T??mto sp??sobom v??razne zlep??ujeme kvalitu ??ivota tis??cov pacientov na celom svete s implantovan??mi podporn??mi srdcov??mi zariadeniami.

N??pl?? pr??ce:

Ako tester/ka sa budete podie??a?? na anal??ze fungovania syst??mu, identifik??cii mo??n??ch situ??ci??, ktor?? m????u nasta??, a n??sledne navrhnete, ako tieto situ??cie najlep??ie otestova??. Budete sa podie??a?? aj na samotnom vykon??van?? testov, anal??ze v??sledkov a pr??prave dokument??cie pre v??voj??rov v pr??pade chybn??ho spr??vania. V??sledkom va??ej pr??ce bude s??bor testov pre dan?? oblas??, ktor?? je v s????asnosti vo v??voji.

??o konkr??tne budete robi???

Analyzova?? po??iadavky.
Ur??enie vhodn??ho sk????obn??ho postupu.
Navrhnutie testovac??ch scen??rov.
Vykon??va?? testy pod??a dopredu pripraven??ch scen??rov
Analyzova?? a rie??i?? ch??by v testovacom frameworku.
Reportova?? objaven?? ch??by a v??sledky testovania.

'
        ]);

        Listing::create([
            'user_id' => '5',
            'title' => 'DevOps In??inier',
            'logo' => 'logos/certicon.png',
            'tags' => 'Azure, Kafka, Docker, AWS',
            'company' => 'CertiCon SK s. r. o.',
            'location' => '??ilina',
            'email' => 'CertiCon@gmail.com',
            'website' => 'https://www.certicon.cz/?lang=en',
            'tel_cislo' => '0948778652',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'N??pl?? pr??ce, pr??vomoci a zodpovednosti:
V akej oblasti bude?? pracova??.
Projekty s?? zameran?? na problematiku por??ch srdcov??ho rytmu a prevenciu srdcov??ho zlyhania, vyv??jan?? ??pi??kovou vedecko techonologickou polo??nos??ou CertiCon. Uplat??ujeme znalosti expertov a vyv??jame rie??enia, ktor?? skvalit??uj?? a zjednodu??uj?? ??ivot mili??nov ??ud?? po celom svete. Unik??tnou pridanou hodnotou je vlastn?? aplikovan?? v??skum a spolupr??ca s medzin??rodn??mi in??tit??ciami.

Aktu??lne pracujeme na budovan?? infra??trukt??ry v cloudov??ch slu??b??ch Azure DevOps a AWS (Amazon Web Services).

H??ad??me nov??ho kolegu do n????ho t??mu, na poz??ciu DevOps Engineer, ktor?? n??m pom????e s procesom migr??cie na??ich v??vojov??ch a produk??n??ch prostred?? do cloudov??ch slu??ieb.

??o presne bude?? robi??:
??? Implement??cia, nasadenie a podpora prostred?? Azure DevOps a AWS.
??? Spolupracova?? s v??voj??rmi na integr??cii nov??ch syst??mov??ch komponentov.
??? Monitorovanie infra??trukt??ry, anal??za probl??mov a v??konnostn??ch charakterist??k.
??? Vytv??ranie a testovanie skriptov CI/CD.

'
        ]);

        Listing::create([
            'user_id' => '6',
            'title' => 'Frontend',
            'tags' => 'React, Vue, CSS',
            'company' => 'Aston ITM',
            'location' => 'Bratislava',
            'email' => 'Aston@gmail.com',
            'website' => 'https://www.aston.com',
            'tel_cislo' => '0948353445',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'N??pl?? pr??ce, pr??vomoci a zodpovednosti:
??udia + technol??gie  = TechLead v Astone ???

Poz??cia, ktor?? sa len tak nevid?? :) K n??m do Astonu h??ad??me TechLeada zameran??ho na Frontend. Tvoja rola TechLeada nebude len na jednom projekte, ale pre cel?? Aston t??m. ??o od teba o??ak??vame?

??? M???? dobr?? sk??senosti s Reactom alebo Vue.js - ak si silnej???? iba v jednom, nevad??, sta???? ochota a chu?? sa nau??i?? ten ??al????. Z??du sa ti aj sk??senosti s TypeScriptom.

??? Si leadrom v t??me - neh??ad??me iba ??isto technick??ho ??loveka, ale niekoho, kto r??d pracuje aj s ??u??mi. Bude?? pracova?? so svojimi kolegami, aby si ich pos??val vpred v technol??gi??ch a rozv??jal v nich potenci??l.

??? Vid???? potenci??l - bude?? pom??ha?? navrhova?? intern?? vylep??enia, ktor?? bud?? vytv??ra?? tie spr??vne a kvalitn?? rie??enia.

??? Tr??fa?? si vies?? na??u developersk?? FE komunitu, kde pom????e?? spolu s kolegami rie??i?? probl??my a podel??te sa o nov?? poznatky.

Ak by si mal z??ujem, m????e?? si vypo??u?? Podcast - Aston z vn??tra: Na??a cesta k slobodnej firme (Pr??beh firmy, ??o rob??me, hodnoty, kult??ra): https://spoti.fi/3s8Qn5K

'
        ]);

        Listing::create([
            'user_id' => '6',
            'title' => 'Trainee na IT',
            'logo' => 'logos/snop.png',
            'tags' => 'Windows, MSOffice',
            'company' => 'Snop Automotive Malacky, a. s.',
            'location' => 'Levice',
            'email' => 'SnopAutomotive@gmail.com',
            'website' => 'https://www.SnopAutomotive.com',
            'tel_cislo' => '0948757445',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'N??pl?? pr??ce, pr??vomoci a zodpovednosti:
Do n????ho t??mu h??ad??me spo??ahliv??ho kolegu/kolegy??u, ktor??ho hlavnou n??pl??ou pr??ce bude support oddeleniu IT.

Tvoje ??lohy:
- L1 podpora pre u????vate??ov a produkciu ??? Windows, MS Office, tla??iarne
in??tal??cia po????ta??ov a tla??iarn??.
- spr??va ticketov v syst??me SysAid.
- z??kladn?? podpora lok??lnych IT syst??mov.
- administrat??vna podpora IT oddelenia.
'
        ]);

        Listing::create([
            'user_id' => '7',
            'title' => 'Web/Full Stack developer',
            'logo' => 'logos/glogic.png',
            'tags' => 'Docker, Vue, Typescript, AWS',
            'company' => 'GlobalLogic Slovakia s.r.o.',
            'location' => 'Levice',
            'email' => 'GlobalLogic@gmail.com',
            'website' => 'https://www.GlobalLogic.com',
            'tel_cislo' => '0948785425',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Job description, responsibilities and duties:
Our customee is a private, family-owned company, founded by scientists and dedicated to providing the world???s highest quality, innovative research and diagnostic products to accelerate biological understanding and enable personalized medicine. Our employees operate worldwide from our U.S. headquarters in Massachusetts, and our offices in the Netherlands, China, and Japan.

- Analyze current web solution used by customer.
- Design and develop enhancements requested by customer.
- Create unit test on implemented functionality.
'
        ]);

        Listing::create([
            'user_id' => '7',
            'title' => 'Program??tor Android aplik??ci??',
            'logo' => 'logos/elcom.png',
            'tags' => 'Android, Java, JRNI',
            'company' => 'ELCOM',
            'location' => 'Vrable',
            'email' => 'ELCOM@gmail.com',
            'website' => 'https://www.ELCOM.com',
            'tel_cislo' => '0948988655',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'N??pl?? pr??ce, pr??vomoci a zodpovednosti:
Do n????ho t??mu h??ad??me zanieten??ho a ??ikovn??ho program??tora aplik??ci?? pre Android.
Bude?? sa podie??a?? na v??voji nov??ch a ??dr??be existuj??cich aplik??ci??.
Zamestnaneck?? v??hody, benefity:
- home office alebo na pracovisku.
- projektov?? odmeny.
- ro??n?? odmeny.
- teambuildingy, akcie s rodinami.
- benefity (pr??spevok pri pracovnom v??ro????, ??ivotnom jubileu, naroden?? die??a??a, a in??)
- bonusy (zlep??ovacie n??vrhy, odpor????anie nov??ho zamestnanca, zastupovanie kolegu a in??).
- firemn?? fitness.
- firemn?? stravovanie.
'
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'CRM Specialist',
            'tags' => 'Data, Microsoft, MSOffice',
            'company' => 'PERSONALITY, s.r.o.',
            'location' => 'Nitra',
            'email' => 'PERSONALITY@gmail.com',
            'website' => 'https://www.PERSONALITY.com',
            'tel_cislo' => '0948858745',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Job description, responsibilities and duties:
Take a look at this exceptional job opportunity. Freshfields company is one of TOP 5 most prestigious law companies in London, that is going to Slovakia to expand it??s activities in Central Europe. Be a part of it!

Your key responsibilities will be:
* Maintaining the data integrity held within the CRM system, including
verification of information, resolving of duplicate records and
augmentation e.g. through linking with external data sources
particularly related to new client enrichment and key exchanges.
* Becoming a ???Superuser??? of data management platforms to support
maintaining CRM data quality and delivering marketing campaigns
efficiently.
* Liaising with EAs around the global firm to ensure that contacts are
shared to appropriate marketing campaign lists and report on
regional adoption.
* Analysing data held within the CRM to deliver insightful reports and
dashboards for analytic requests and support the function to identify
trends.
* Support colleagues to manage the quality and integrity of data held in
the CRM system, especially within the pitch module.
'
        ]);

        Listing::create([
            'user_id' => '1',
            'title' => 'CyberSecurity Auditor',
            'logo' => 'logos/slsp.png',
            'tags' => 'Networking, Microsoft, MSOffice',
            'company' => 'Slovensk?? sporite????a',
            'location' => 'Nitra',
            'email' => 'slsp@gmail.com',
            'website' => 'https://www.slsp.sk',
            'tel_cislo' => '0948885425',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'N??pl?? pr??ce, pr??vomoci:
???	Audity zameran?? na kybernetick?? bezpe??nos??, vyh??ad??vanie bezpe??nostn??ch riz??k v syst??moch, procesoch.
???	Obozn??menie sa s???rozsiahlou architekt??rou IT syst??mov a???aplik??ci?? v???inovat??vnom prostred?? Slovenskej sporite??ne a???Erste banky.
???	Spolupr??ca v r??mci expertn??ch skup??n Erste Group na projektoch celoskupinov??ho charakteru v oblasti vn??torn??ho auditu.
???	Konzulta??n?? ??innos?? s cie??om vyh??ad??vania zlep??en?? pri jednotliv?? IT a???Security procesy.
???	Identifik??cia riz??k na prebiehaj??cich projektoch v???banke.
'
        ]);

        Listing::create([
            'user_id' => '2',
            'title' => 'ICT Administrator',
            'logo' => 'logos/telekom.png',
            'tags' => 'SAP, Microsoft, MSOffice',
            'company' => 'Telekom',
            'location' => 'Levice',
            'email' => 'Telekom@gmail.com',
            'website' => 'https://www.telekom.sk',
            'tel_cislo' => '0948765643',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Job description, responsibilities and duties:
Purpose,
Independently check, execute, solve (where appropriate), and creates tickets (problem ticket, change management ticket, incident, delivery order (DO)) in order to maintain service to customers according to given quality KPIs and internal processes (INM, CHM, PRM, DOM). 2nd level environment.
General description
Performing tasks for systems, applications and products (SAP) independently and autonomously according actual standards.
General knowledge and ability to support various components of the plug with specialization to certain area. Developing own methods and approaches for assigned area and propagating them in team.
Independently check, execute, solve and create tickets (change, incident management) in order to maintain service to customers according to given quality standards and internal processes.
Ability to solve more complex tasks
Accountabilities:
* Smooth and uninterrupted operation of customers??? environment.
* Perform team specific non-technical tasks such as quality/process/reporting to support daily operation.
* Train and participate on education of other employees.
* Create and maintain documentation.
* Participate on regular and/or irregular communication with colleagues in an international environment to ensure operational goals.
* Responsibility to participate on team goals.
Tasks:
* Performing maintenance and health checks.
* System restarts, move, start/stop systems on different hosts.
* Standard PROD environment adjustments under supervision of experienced colleagues.
* Handling and solving daily operation tasks and issues.
* Standard change implementation (Kernel/OS/SAP/DB updates and patches) with support of experienced colleagues.
'
        ]);
//********************************************************************************************************************************************************************************************
        Prihlasenie::create([
            'user_id' => '2',
            'listing_id' => '1',
            'aktivna' => '1',
        ]);

        Prihlasenie::create([
            'user_id' => '3',
            'listing_id' => '1',
            'aktivna' => '1',
        ]);

        Prihlasenie::create([
            'user_id' => '1',
            'listing_id' => '1',
            'aktivna' => '1',
        ]);

        Prihlasenie::create([
            'user_id' => '4',
            'listing_id' => '6',
            'aktivna' => '1',
        ]);

        Prihlasenie::create([
            'user_id' => '5',
            'listing_id' => '2',
            'aktivna' => '1',
        ]);

        Prihlasenie::create([
            'user_id' => '6',
            'listing_id' => '1',
            'aktivna' => '1',
        ]);

        Prihlasenie::create([
            'user_id' => '7',
            'listing_id' => '7',
            'aktivna' => '1',
        ]);

        Prihlasenie::create([
            'user_id' => '8',
            'listing_id' => '8',
            'aktivna' => '1',
        ]);
        Prihlasenie::create([
            'user_id' => '10',
            'listing_id' => '10',
            'aktivna' => '1',
        ]);
        Prihlasenie::create([
            'user_id' => '11',
            'listing_id' => '11',
            'aktivna' => '1',
        ]);
        Prihlasenie::create([
            'user_id' => '13',
            'listing_id' => '11',
            'aktivna' => '1',
        ]);
        Prihlasenie::create([
            'user_id' => '14',
            'listing_id' => '13',
            'aktivna' => '1',
        ]);
        Prihlasenie::create([
            'user_id' => '15',
            'listing_id' => '11',
            'aktivna' => '1',
        ]);
        Prihlasenie::create([
            'user_id' => '16',
            'listing_id' => '12',
            'aktivna' => '1',
        ]);
//********************************************************************************************************************************************************************************************
        Aktivity::create([
            'prihlasenie_id' => '1',
            'pocet_hodin' => '8',
            'homeoffice' => '0',
            '_token' => 'yxcycadasd',
        ]);
        Aktivity::create([
            'prihlasenie_id' => '1',
            'pocet_hodin' => '7',
            'homeoffice' => '0',
            '_token' => 'yxcycadasd',
        ]);
        Aktivity::create([
            'prihlasenie_id' => '1',
            'pocet_hodin' => '8',
            'homeoffice' => '0',
            '_token' => 'yxcycadasd',
        ]);

        Aktivity::create([
            'prihlasenie_id' => '2',
            'pocet_hodin' => '8',
            'homeoffice' => '0',
            '_token' => 'yxcycadasd',
        ]);
        Aktivity::create([
            'prihlasenie_id' => '2',
            'pocet_hodin' => '8',
            'homeoffice' => '0',
            '_token' => 'yxcycadasd',
        ]);
        Aktivity::create([
            'prihlasenie_id' => '2',
            'pocet_hodin' => '7',
            'homeoffice' => '0',
            '_token' => 'yxcycadasd',
        ]);
        Aktivity::create([
            'prihlasenie_id' => '2',
            'pocet_hodin' => '8',
            'homeoffice' => '0',
            '_token' => 'yxcycadasd',
        ]);

        Aktivity::create([
            'prihlasenie_id' => '3',
            'pocet_hodin' => '8',
            'homeoffice' => '0',
            '_token' => 'yxcycadasd',
        ]);
        Aktivity::create([
            'prihlasenie_id' => '3',
            'pocet_hodin' => '9',
            'homeoffice' => '0',
            '_token' => 'yxcycadasd',
        ]);
        Aktivity::create([
            'prihlasenie_id' => '3',
            'pocet_hodin' => '7',
            'homeoffice' => '0',
            '_token' => 'yxcycadasd',
        ]);
    }
}
