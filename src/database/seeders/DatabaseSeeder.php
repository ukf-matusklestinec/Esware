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
            'description' => 'Do nášho tímu hľadáme analytika, ktorý sa nebojí "chopiť" technickej analýzy. Cieľom projektu sú konzultácie ku architektonickým návrhom a implementácií ESB riešenia na platforme IBM WebSphere ESB.

Hľadáme kolegu, ktorý už má skúsenosti s analýzou, no zároveň má chuť naučiť sa niečo nové. Do detailov tejto práce Ťa radi zaškolíme.
Náplň práce:
•	Revízia architektonických konceptov.
•	Revízia implementácie.
•	Performance tuning pre SEPA riešenie.
•	Performance testy - konzultácie pri nasadzovaní ESB do prevádzky.
•	Konzultácie k designu služieb.
•	V ďalšej fáze sa realizuje prípravná fáza pre integráciu korporátneho bankovníctva.

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
            'title' => 'Dátový/-á analytik/-čka',
            'logo' => 'logos/csob.png',
            'tags' => 'SQL, Oracle, PowerBI',
            'company' => 'ČSOB',
            'location' => 'Zvolen',
            'email' => 'csob@gmail.com',
            'website' => 'https://www.csob.cz/portal/',
            'tel_cislo' => '0948244278',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Do nášho teamu hľadáme skúseného analytika, s veľkým zmyslom pre presnosť a detail. Ak vieš navyše pochopiť reportingové výstupy aj z business pohľadu, pri riešení zložitejších úlohách vieš navrhovať riešenia, uvažovať procesne a koncepčne, hľadáme teba.
Hlavná pracovná náplň:
špecializované reportovanie dát kontaktného centra.
Analýza, interpretácia a vizualizácia dát – hľadáme niekoho, kto vie výstupy dobre pochopiť aj z business pohľadu a na základe toho nastaviť formu reportov tak, aby mali čo najväčšiu výpovednú hodnotu'
        ]);

        Listing::create([
            'user_id' => '2',
            'title' => 'Java developer - junior',
            'logo' => 'logos/csob.png',
            'tags' => 'Java, JavaScript',
            'company' => 'ČSOB',
            'location' => 'Nitra',
            'email' => 'csob1@gmail.com',
            'website' => 'https://www.csob.cz/portal/',
            'tel_cislo' => '0948856355',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Chceš vyvíjať kvalitné aplikácie a softvérové riešenia na Java technológiách?
Chceš pracovať v medzinárodnom teame programátorov, získavať skúsenosti a popritom využívať anglický jazyk? Ak je odpoveď áno, možno hľadáme práve teba!
Ponúkame ti prístup k moderným bankovým technológiám a možnosť byť súčasťou agilného SCRUM tímu.
Náplň práce:
Vyvíjať kvalitné aplikácie a softvérové riešenia na Java technológiách.
Aktívne navrhovať a implementovať funkčné a technické vylepšenia.
Používať osvedčené postupy v oblasti vývoja softvéru.
Pracovať s manažmentom na vylepšovaní vývojových a testovacích procesov.'
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
            'description' => 'Náplň práce, pravomoci a zodpovědnosti
Náš klient od roku 2016 pracuje na projektu pro Finskou celní správu. Jedná se o řešení elektronického celnictví eCustoms a patří k jedné z nejsofistikovanějších a  nejspolehlivějších implementací celního systému v celé EU.
Budete pracovat v menším, agilně fungujícím týmů FE a BE vývojářů a testerů, kteří jsou úzce propojeni s Business analytiky a Product Ownerem.

Budete se podílet na rozvoji mezinárodního product eCustoms, postaveném  na Microsoft platformě s použitím Model Driven Architecture.'
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
            'description' => 'Náplň práce, právomoci a zodpovednosti
Do rozrastajúceho sa tímu nášho klienta hľadáme kandidáta/kandidátku na pozíciu IT business analytik.

Naším klientom je dlhodobo úspešná slovenská spoločnosť, ktorá pre svojich zákazníkov poskytuje komplexné riešenia a služby už viac ako 30 rokov. Tvorí informačné systémy, ktoré zabezpečujú nepretržité fungovanie významných spoločností a štátnych organizácií. V portfóliu má projekty, ktoré vyžadujú vysokú profesionalitu po projektovej, analytickej a programátorskej stránke - digitálne archívy, informačné systémy, riešenia biznis inteligencie, elektronické dispečingy a iné.

Podstatou tejto pracovnej pozície je zisťovanie a špecifikácia požiadaviek zákazníka a ich následná interpretácia implementačnému tímu daného SW.

Medzi Vaše typické činnosti na tejto pozícii patrí najmä:

• Analýza a špecifikácia požiadaviek zákazníka,
• Tvorba projektovej a používateľskej dokumentácie,
• Návrh riešení,
• UML modelovanie,
• Databázové modelovanie,
• Tvorba SQL skriptov,
• Analýza zdrojového kódu (znalosť princípov OOP – objektovo orientovaného programovania).

Ideálnym kandidátom na tejto pozícii je človek, ktorý sa chce neustále vzdelávať. Náš klient Vám vie poskytnúť potrebné zaškolenie a v tejto práci budete vždy cítiť záujem a dôveru svojich nadriadených. Táto pozícia je vhodná pre kandidáta, ktorý ocení prácu s najnovšími technológiami, dobrý kolektív ako aj možnosť uplatniť svoje nápady. Môžete sa stať súčasťou špičkového tímu odborníkov, nadšencov do techniky, ale najmä výborných kolegov.'
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
• Analysis of customer requirements and design of tailor-made automation solution.
• Process analysis and identification of automation opportunities.
• Analysis, active search and implementation of advanced technologies.
• Own, establish and govern the development and operation standards.
• Initiate and drive R&D for automation solutions like ML/AI, RPA, Smart Data Extraction.
• Evaluation and realisation of process improvements to ensure cost reduction and increase of efficiency and/or quality.
• Apply our automation solution portfolio (e.g. Blue Prism, ABBYY Flexicapture).
• Deliver consulting and trainings in the area of expertise (Automation/ Digitalization/ Innovation and Business Architecture).
• Creating and maintaining positive customer relationships to ensure future sales.
• Selling/Promoting products and services using solid arguments to prospective customers. Performing cost-benefit analyses of existing and potential customers.
• Presenting automation solutions to customers and management.
'
        ]);

        Listing::create([
            'user_id' => '4',
            'title' => 'Pracovník IT',
            'tags' => 'SQL, PowerBI',
            'company' => 'WINDOW GLASS, s.r.o.',
            'location' => 'Nitra',
            'email' => 'windowglass@gmail.com',
            'website' => 'https://www.windowglass.sk',
            'tel_cislo' => '0948333456',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Náplň práce, právomoci a zodpovednosti:
Riešenie potrieb užívateľov, udržiavanie a vylepšovanie IT nástrojov (software, hardware, databázy) a hľadanie možností zlepšovania s cieľom ušetriť čas užívateľom systému.
Reagovanie a odstraňovanie IT incidentov a proaktívny prístup na predchádzanie vzniku takýchto udalostí.
Realizácia projektov IT infraštruktúry.
Vytváranie dokumentácie k jednotlivým procesom, štruktúrám IT.
Komunikácia s internými užívateľmi podnikového SW ohľadne požiadaviek na funkcionalitu jednotlivých modulov SW, ich prvotné vyhodnotenie, prípadný návrh alternatívneho riešenia požiadaviek.
Zadávanie požiadaviek na dodávateľa podnikového SW ohľadne implementácie nových riešení a spolupráca pri ich implementácii.
Podpora a súčinnosť pri kontrole funkčnosti jednotlivých pracovných postupov v rámci podnikového SW.
Príprava výstupných reportov z databáz informačného systému a súčinnosť pri úprave tabuľkových modelov pre spracovanie dát (MS Access, MS Excel, prípadne Power BI).
SW a HW údržba počítačov a iných zariadení v rámci počítačovej siete.
Prácu je možné po zaškolení vykonávať aj z domu.'
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
            'description' => 'Náplň práce, právomoci a zodpovednosti:
V oblasti zdravotníctva vyvíjame webovú službu, ktorá umožňuje online monitorovanie stavu pacientov, ktorým bol implantovaný kardiostimulátor alebo defibrilátor. Týmto spôsobom výrazne zlepšujeme kvalitu života tisícov pacientov na celom svete s implantovanými podpornými srdcovými zariadeniami.

Náplň práce:

Ako tester/ka sa budete podieľať na analýze fungovania systému, identifikácii možných situácií, ktoré môžu nastať, a následne navrhnete, ako tieto situácie najlepšie otestovať. Budete sa podieľať aj na samotnom vykonávaní testov, analýze výsledkov a príprave dokumentácie pre vývojárov v prípade chybného správania. Výsledkom vašej práce bude súbor testov pre danú oblasť, ktorá je v súčasnosti vo vývoji.

Čo konkrétne budete robiť?

Analyzovať požiadavky.
Určenie vhodného skúšobného postupu.
Navrhnutie testovacích scenárov.
Vykonávať testy podľa dopredu pripravených scenárov
Analyzovať a riešiť chýby v testovacom frameworku.
Reportovať objavené chýby a výsledky testovania.

'
        ]);

        Listing::create([
            'user_id' => '5',
            'title' => 'DevOps Inžinier',
            'logo' => 'logos/certicon.png',
            'tags' => 'Azure, Kafka, Docker, AWS',
            'company' => 'CertiCon SK s. r. o.',
            'location' => 'Žilina',
            'email' => 'CertiCon@gmail.com',
            'website' => 'https://www.certicon.cz/?lang=en',
            'tel_cislo' => '0948778652',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Náplň práce, právomoci a zodpovednosti:
V akej oblasti budeš pracovať.
Projekty sú zamerané na problematiku porúch srdcového rytmu a prevenciu srdcového zlyhania, vyvíjané špičkovou vedecko techonologickou poločnosťou CertiCon. Uplatňujeme znalosti expertov a vyvíjame riešenia, ktoré skvalitňujú a zjednodušujú život miliónov ľudí po celom svete. Unikátnou pridanou hodnotou je vlastný aplikovaný výskum a spolupráca s medzinárodnými inštitúciami.

Aktuálne pracujeme na budovaní infraštruktúry v cloudových službách Azure DevOps a AWS (Amazon Web Services).

Hľadáme nového kolegu do nášho tímu, na pozíciu DevOps Engineer, ktorý nám pomôže s procesom migrácie našich vývojových a produkčných prostredí do cloudových služieb.

Čo presne budeš robiť:
• Implementácia, nasadenie a podpora prostredí Azure DevOps a AWS.
• Spolupracovať s vývojármi na integrácii nových systémových komponentov.
• Monitorovanie infraštruktúry, analýza problémov a výkonnostných charakteristík.
• Vytváranie a testovanie skriptov CI/CD.

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
            'description' => 'Náplň práce, právomoci a zodpovednosti:
Ľudia + technológie  = TechLead v Astone ❤

Pozícia, ktorá sa len tak nevidí :) K nám do Astonu hľadáme TechLeada zameraného na Frontend. Tvoja rola TechLeada nebude len na jednom projekte, ale pre celý Aston tím. Čo od teba očakávame?

✔ Máš dobré skúsenosti s Reactom alebo Vue.js - ak si silnejší iba v jednom, nevadí, stačí ochota a chuť sa naučiť ten ďalší. Zídu sa ti aj skúsenosti s TypeScriptom.

✔ Si leadrom v tíme - nehľadáme iba čisto technického človeka, ale niekoho, kto rád pracuje aj s ľuďmi. Budeš pracovať so svojimi kolegami, aby si ich posúval vpred v technológiách a rozvíjal v nich potenciál.

✔ Vidíš potenciál - budeš pomáhať navrhovať interné vylepšenia, ktoré budú vytvárať tie správne a kvalitné riešenia.

✔ Trúfaš si viesť našu developerskú FE komunitu, kde pomôžeš spolu s kolegami riešiť problémy a podelíte sa o nové poznatky.

Ak by si mal záujem, môžeš si vypočuť Podcast - Aston z vnútra: Naša cesta k slobodnej firme (Príbeh firmy, čo robíme, hodnoty, kultúra): https://spoti.fi/3s8Qn5K

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
            'description' => 'Náplň práce, právomoci a zodpovednosti:
Do nášho tímu hľadáme spoľahlivého kolegu/kolegyňu, ktorého hlavnou náplňou práce bude support oddeleniu IT.

Tvoje úlohy:
- L1 podpora pre užívateľov a produkciu – Windows, MS Office, tlačiarne
inštalácia počítačov a tlačiarní.
- správa ticketov v systéme SysAid.
- základná podpora lokálnych IT systémov.
- administratívna podpora IT oddelenia.
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
Our customee is a private, family-owned company, founded by scientists and dedicated to providing the world’s highest quality, innovative research and diagnostic products to accelerate biological understanding and enable personalized medicine. Our employees operate worldwide from our U.S. headquarters in Massachusetts, and our offices in the Netherlands, China, and Japan.

- Analyze current web solution used by customer.
- Design and develop enhancements requested by customer.
- Create unit test on implemented functionality.
'
        ]);

        Listing::create([
            'user_id' => '7',
            'title' => 'Programátor Android aplikácií',
            'logo' => 'logos/elcom.png',
            'tags' => 'Android, Java, JRNI',
            'company' => 'ELCOM',
            'location' => 'Vrable',
            'email' => 'ELCOM@gmail.com',
            'website' => 'https://www.ELCOM.com',
            'tel_cislo' => '0948988655',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Náplň práce, právomoci a zodpovednosti:
Do nášho tímu hľadáme zanieteného a šikovného programátora aplikácií pre Android.
Budeš sa podieľať na vývoji nových a údržbe existujúcich aplikácií.
Zamestnanecké výhody, benefity:
- home office alebo na pracovisku.
- projektové odmeny.
- ročné odmeny.
- teambuildingy, akcie s rodinami.
- benefity (príspevok pri pracovnom výročí, životnom jubileu, narodení dieťaťa, a iné)
- bonusy (zlepšovacie návrhy, odporúčanie nového zamestnanca, zastupovanie kolegu a iné).
- firemné fitness.
- firemné stravovanie.
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
Take a look at this exceptional job opportunity. Freshfields company is one of TOP 5 most prestigious law companies in London, that is going to Slovakia to expand it´s activities in Central Europe. Be a part of it!

Your key responsibilities will be:
* Maintaining the data integrity held within the CRM system, including
verification of information, resolving of duplicate records and
augmentation e.g. through linking with external data sources
particularly related to new client enrichment and key exchanges.
* Becoming a ‘Superuser’ of data management platforms to support
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
            'company' => 'Slovenská sporiteľňa',
            'location' => 'Nitra',
            'email' => 'slsp@gmail.com',
            'website' => 'https://www.slsp.sk',
            'tel_cislo' => '0948885425',
            'schvalena' => '1',
            'aktivna' => '1',
            'description' => 'Náplň práce, právomoci:
•	Audity zamerané na kybernetickú bezpečnosť, vyhľadávanie bezpečnostných rizík v systémoch, procesoch.
•	Oboznámenie sa s rozsiahlou architektúrou IT systémov a aplikácií v inovatívnom prostredí Slovenskej sporiteľne a Erste banky.
•	Spolupráca v rámci expertných skupín Erste Group na projektoch celoskupinového charakteru v oblasti vnútorného auditu.
•	Konzultačná činnosť s cieľom vyhľadávania zlepšení pri jednotlivé IT a Security procesy.
•	Identifikácia rizík na prebiehajúcich projektoch v banke.
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
* Smooth and uninterrupted operation of customers’ environment.
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
