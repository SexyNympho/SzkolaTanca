<?php

class ProductionSeeder extends DatabaseSeeder
{
    public function run()
    {
        $danceClass = new DanceClass;
        $danceClass->classDate = '17:00:00';
        $danceClass->duration = 1;
        $danceClass->level = "Początkujący";
        $danceClass->weekDay = 1;
        $danceClass->save();

        $danceClass2 = new DanceClass;
        $danceClass2->classDate = '18:00:00';
        $danceClass2->weekDay = 1;
        $danceClass2->duration = 1;
        $danceClass2->level = "Początkujący";
        $danceClass2->save();

        $danceClass3 = new DanceClass;
        $danceClass3->classDate = '19:00:00';
        $danceClass3->weekDay = 1;
        $danceClass3->duration = 1;
        $danceClass3->level = "Zaawansowani";
        $danceClass3->save();

        $danceClass4 = new DanceClass;
        $danceClass4->classDate = '20:00:00';
        $danceClass4->weekDay = 1;
        $danceClass4->duration = 1;
        $danceClass4->level = "Zaawansowani";
        $danceClass4->save();

        $danceClass5 = new DanceClass;
        $danceClass5->classDate = '17:00:00';
        $danceClass5->duration = 1;
        $danceClass5->weekDay = 2;
        $danceClass5->save();

        $danceClass6 = new DanceClass;
        $danceClass6->classDate = '18:00:00';
        $danceClass6->duration = 1;
        $danceClass6->level = "Zaawansowani";
        $danceClass6->weekDay = 2;
        $danceClass6->save();

        $danceClass7 = new DanceClass;
        $danceClass7->classDate = '19:00:00';
        $danceClass7->duration = 1;
        $danceClass7->level = "Średnio-zaawansowani";
        $danceClass7->weekDay = 2;
        $danceClass7->save();

        $danceClass8 = new DanceClass;
        $danceClass8->classDate = '20:00:00';
        $danceClass8->duration = 1;
        $danceClass8->level = "Zaawansowani";
        $danceClass8->weekDay = 2;
        $danceClass8->save();

        $danceClass9 = new DanceClass;
        $danceClass9->classDate = '17:00:00';
        $danceClass9->duration = 1;
        $danceClass9->level = "Początkujący";
        $danceClass9->weekDay = 3;
        $danceClass9->save();

	$danceClass10 = new DanceClass;
        $danceClass10->classDate = '18:00:00';
        $danceClass10->duration = 1;
        $danceClass10->level = "Początkujący";
        $danceClass10->weekDay = 3;
        $danceClass10->save();

	$danceClass11 = new DanceClass;
        $danceClass11->classDate = '19:00:00';
        $danceClass11->duration = 1;
        $danceClass11->level = "Początkujący";
        $danceClass11->weekDay = 3;
        $danceClass11->save();

	$danceClass12 = new DanceClass;
        $danceClass12->classDate = '20:00:00';
        $danceClass12->duration = 1;
        $danceClass12->level = "Średnio-zaawansowani";
        $danceClass12->weekDay = 3;
        $danceClass12->save();

	$danceClass13 = new DanceClass;
        $danceClass13->classDate = '21:00:00';
        $danceClass13->duration = 1;
        $danceClass13->level = "Zaawansowani";
        $danceClass13->weekDay = 3;
        $danceClass13->save();

	$danceClass14 = new DanceClass;
        $danceClass14->classDate = '18:00:00';
        $danceClass14->duration = 1;
        $danceClass14->weekDay = 4;
        $danceClass14->save();

	$danceClass15 = new DanceClass;
        $danceClass15->classDate = '19:00:00';
        $danceClass15->duration = 1;
        $danceClass15->level = "Początkujący";
        $danceClass15->weekDay = 4;
        $danceClass15->save();

	$danceClass16 = new DanceClass;
        $danceClass16->classDate = '20:00:00';
        $danceClass16->duration = 1;
        $danceClass16->level = "Średnio-zaawansowani";
        $danceClass16->weekDay = 4;
        $danceClass16->save();

	$danceClass17 = new DanceClass;
        $danceClass17->classDate = '21:00:00';
        $danceClass17->duration = 1;
        $danceClass17->level = "Zaawansowani";
        $danceClass17->weekDay = 4;
        $danceClass17->save();

	$danceClass18 = new DanceClass;
        $danceClass18->classDate = '17:00:00';
        $danceClass18->duration = 1;
        $danceClass18->level = "Średnio-zaawansowani";
        $danceClass18->weekDay = 5;
        $danceClass18->save();

	$danceClass19 = new DanceClass;
        $danceClass19->classDate = '18:00:00';
        $danceClass19->duration = 1;
        $danceClass19->level = "Zaawansowani";
        $danceClass19->weekDay = 5;
        $danceClass19->save();

	$danceClass20 = new DanceClass;
        $danceClass20->classDate = '19:00:00';
        $danceClass20->duration = 1;
        $danceClass20->level = "Średnio-zaawansowani";
        $danceClass20->weekDay = 5;
        $danceClass20->save();
	
	$danceClass21 = new DanceClass;
        $danceClass21->classDate = '20:00:00';
        $danceClass21->duration = 1;
        $danceClass21->level = "ROZTAŃCZENIE";
        $danceClass21->weekDay = 5;
        $danceClass21->save();

	$danceClass22 = new DanceClass;
        $danceClass22->classDate = '17:00:00';
        $danceClass22->duration = 1;
        $danceClass22->level = "Początkujący";
        $danceClass22->weekDay = 6;
        $danceClass22->save();

	$danceClass23 = new DanceClass;
        $danceClass23->classDate = '18:00:00';
        $danceClass23->duration = 1;
        $danceClass23->level = "Średnio-zaawansowani";
        $danceClass23->weekDay = 6;
        $danceClass23->save();

	$danceClass24 = new DanceClass;
        $danceClass24->classDate = '19:00:00';
        $danceClass24->duration = 1;
        $danceClass24->level = "Średnio-zaawansowani";
        $danceClass24->weekDay = 6;
        $danceClass24->save();

	$danceClass25 = new DanceClass;
        $danceClass25->classDate = '20:00:00';
        $danceClass25->duration = 1;
        $danceClass25->level = "Początkujący";
        $danceClass25->weekDay = 6;
        $danceClass25->save();

	$danceClass26 = new DanceClass;
        $danceClass26->classDate = '21:00:00';
        $danceClass26->duration = 1;
        $danceClass26->level = "Średnio-zaawansowani";
        $danceClass26->weekDay = 6;
        $danceClass26->save();

	$danceClass27 = new DanceClass;
        $danceClass27->classDate = '18:00:00';
        $danceClass27->duration = 1;
        $danceClass27->weekDay = 7;
        $danceClass27->save();

	$danceClass28 = new DanceClass;
        $danceClass28->classDate = '19:00:00';
        $danceClass28->duration = 1;
        $danceClass28->level = "Zaawansowani";
        $danceClass28->weekDay = 7;
        $danceClass28->save();

        $instructor = new Instructor;
        $instructor->name = "Aneta";
        $instructor->surname = "Kocot";
        $instructor->description = "Początkująca instruktora z ogromną pasją do tańca. Jej przygoda z tańcem rozpoczęła się w wieku 10 lat. Zaczęła wtedy tańczyć hip hop i przez 7 lat rozwijała się w tej dziedzinie jeżdżąc na turnieje i pokazy. Z czasem postanowiła zająć się również  tańcem towarzyskim, którym pasjonuje się do dnia dzisiejszego. Kiedy nadszedł czas aby zakończyć swoją przygodę z hip hopem zapisała się na zajęcia z tańca orientalnego, w którym nadal szkoli się u najlepszej w Polsce instruktorki - Nesajem. Moda na salsę, bachatę i kizombę sprawiła, że i te tańce nie mogły pozostać dla niej tajemnicą. Po długim szkoleniu, związanym z codziennymi 7-8 godzinnymi treningami oraz wyjazdami na festiwale taneczne została instruktorką. Obecnie w naszej szkole prowadzi zajęcia z bachaty oraz kizomby. Jest to młoda, energiczna dziewczyna, która pragnie rozwijać swoją pasję do tańca i zarażać nią innych.";
        $instructor->save();
        $instructor->danceClasses()->save($danceClass3);
        $instructor->danceClasses()->save($danceClass4);
        $instructor->danceClasses()->save($danceClass9);
        $instructor->danceClasses()->save($danceClass10);
        $instructor->danceClasses()->save($danceClass23);
        $instructor->danceClasses()->save($danceClass24);

        $instructor = new Instructor;
        $instructor->name = "Nesajem";
        $instructor->description = "NESAJEM – tancerka, instruktorka, choreograf, związana z grupą Saida Artistic Team, uczennica mistrzyni świata w tańcu orientalnym – Saidy. Taniec pasjonował ją od najmłodszych lat. Pierwszym etapem jej tanecznej edukacji były występy w zespołach szkolnych, po których postanowiła spróbować swoich sił również w sportowym tańcu towarzyskim.<br/><br/>
Dla świata Orientu narodziła się przybierając arabskie imię Nesajem - 'kwiat'. Jej największą dotychczasową przygodą z kulturą Wschodu było wystąpienie w filmie „Mun Dhinam Paartheney” - jednej z najnowszych produkcji kina bollywood oraz występ na Stockholm Belly Dance Festiwal. Nesajem występowała również m.in. na: Międzynarodowym Festiwali Tańca w Bielsku-Białej, Międzynarodowych Targach Kosmetycznych w katowickim Spodku, Tygodniu Kultury Beskidzkiej w Żywcu, Dniach Śląskiej Szkoły Tańca, Jarmarku Średniowiecznym na zamku w Chudowie, Festiwalu Tańca Saida Dance Academy, Festiwalu Kultury Ulicznej w Tarnowskich Górach oraz na wielu imprez 	olicznościowych.<br/><br/>
Nesajem pobierała nauki między innymi u: Beaty Cifuentes, Horacjo Cifuentes, Zazy Hassana, Orit Maftsir, Magdy'ego El-Leisy, Bri Harley, Momo Kadousa, Ahmeda Fekry, Sadie, Tito, Thasis, Samiry. Nesajem nadal szkoli swój warsztat pod okiem Saidy, nieustatnnie poszerzając wachlarz tanecznych umiejętności. ";
        $instructor->save();
        $instructor->danceClasses()->save($danceClass15);
        $instructor->danceClasses()->save($danceClass16);
        $instructor->danceClasses()->save($danceClass17);

        $instructor = new Instructor;
        $instructor->name = "Daniel";
        $instructor->surname = "Sempere";
        $instructor->description = "Jego przygoda z tańcem towarzyskim rozpoczęła się kiedy był jeszcze dzieckiem. Bardzo szybko trenerzy odkryli w nim niesamowity talent. Już w wieku 6 lat jeździł na turnieje i wygrywał liczne puchary. Po latach postanowił zakończyć swoją karierę, gdyż chciał spełnić kolejne swoje marzenie - przekazywanie swojej pasji innym. Pracuje w naszej szkole od samego początku jej istnienia jako instruktor tańca towarzyskiego. Z czasem postanowił spróbować czegoś nowego i poszedł na kurs salsy. Tutaj ponownie objawił się jego niesamowity talent i bardzo szybko doszedł do perfekcji pozwalającej mu na rozpoczęcie prowadzenia własnych zajęć z tego właśnie tańca. Zapraszamy serdecznie na zajęcia pełne radości płynącej z tańca, a jednocześnie pozwalające na szczegółowe poznanie jego techniki.";
        $instructor->save();
        $instructor->danceClasses()->save($danceClass);
        $instructor->danceClasses()->save($danceClass8);
        $instructor->danceClasses()->save($danceClass11);
        $instructor->danceClasses()->save($danceClass12);
        $instructor->danceClasses()->save($danceClass13);
        $instructor->danceClasses()->save($danceClass20);
        $instructor->danceClasses()->save($danceClass21);

        $instructor = new Instructor;
        $instructor->name = "Piotr";
        $instructor->surname = "Ostojski";
        $instructor->description = "Tańcem zainteresował się pod przymusem robiąc projekt z TI ale oficjalnie jest to wysoce wykwalifikowany instruktor, który zajmuje się hip hopem i z tego właśnie tańca prowadzi zajęcia w naszej szkole :)";
        $instructor->save();
        $instructor->danceClasses()->save($danceClass2);
        $instructor->danceClasses()->save($danceClass6);
        $instructor->danceClasses()->save($danceClass7);
        $instructor->danceClasses()->save($danceClass18);
        $instructor->danceClasses()->save($danceClass19);
        $instructor->danceClasses()->save($danceClass22);

        $instructor = new Instructor;
        $instructor->name = "Catalina";
        $instructor->surname = "Silva";
        $instructor->description = "Do Polski przyleciała z Chile i tak pokochała nasz kraj, że postanowiła tutaj zostać na stałe. Pod namową swojej przyjaciółki (która również jest instruktorką w naszej szkole - Aneta) zapisała się na kurs tańca towarzyskiego. Z czasem zaczęła jeździć na turnieje i zdobyła mistrzowską S - klasę. Obecnie zakończyła już swoją karierę i zaczęła uczyć tańca innych. Jej zajęcia zawsze są pełne śmiechu, gdyż Catalina ma niesamowitą osobowość. Panuje tu sympatyczna atmosfera, w której można jednocześnie bawić się i uczyć techniki tańca.";
        $instructor->save();
        $instructor->danceClasses()->save($danceClass25);
        $instructor->danceClasses()->save($danceClass26);
        $instructor->danceClasses()->save($danceClass28);

        $instructor = new Instructor;
        $instructor->name = "Monika";
        $instructor->surname = "Jelonek";
        $instructor->description = "Młoda i pełna energii dziewczyna, która w ramach odstresowania od codziennych zajęć zaczęła chodzić za zajęcia z fitnessu. Z czasem odkryła nowy styl łączący fitness z tańcem i pojechała na specjalistyczne szkolenie, po którym została instruktorką ZUMBY. Na jej zajęciach zawsze jest mnóstwo enerii, szybkie tempo i niesamowita zabawa!";
        $instructor->save();
        $instructor->danceClasses()->save($danceClass5);
        $instructor->danceClasses()->save($danceClass14);
        $instructor->danceClasses()->save($danceClass27);

        $danceStyle = new DanceStyle;
        $danceStyle->name = "Taniec towarzyski";
        $danceStyle->description = "Jak wygląda taniec towarzyski ? <br/>Zazwyczaj jest On,Ona i muzyka, wolna, szybka, romantyczna, zmysłowa, gorąca, uwodzicielska, stonowana lub szalona... Na zajęciach Kursów Tańca Towarzyskiego jest tak samo... jest On jest Ona jest muzyka... tyle, że są jeszcze Wasi Instruktorzy Tańca którzy fachowo wyjaśnią Jej i Jemu co zrobić z rękami i nogami w takt tejże muzyki. Powoli, cierpliwie i z humorem wprowadzają Państwa w zawiłe arkana sztuki tanecznej. Poczynając od I stopnia, a kończąc na VI, wiedza przekazywana jest etapami, wraz ze wzrostem tak wiedzy teoretycznej, jak i umiejętności praktycznych.<br/>
Jako, że każdej porcji wiedzy teoretycznej, towarzyszą oczywiście próby wykorzystania jej nogami, tańczymy w parach, czasem osobno - jeżeli wymaga tego choreografia - lecz zawsze pod czujnym okiem instruktorów. <br/>
Na sali, pomimo zróżnicowania wiekowego oraz umiejętnościowego, zawsze panuje wesoła atmosfera pełna życzliwości, szczerości, koleżeństwa i dobrego humoru :)))), bla,bla… To trzeba po prostu przeżyć. <br/>
Nasze Kursy Tańca Towarzyskiego niejednej osobie pomogły w nabraniu pewności siebie, czy przełamaniu bariery nieśmiałości w nawiązywaniu nowych znajomości. Niejeden z uczestników naszych Kursów, z szarej myszki przeobraził się w lwa parkietu lub odnalazł swoją drugą połówkę. W naszej Szkole Tańca przy okazji nauki tańca, dobrze się bawimy, rozwijamy, a czasem zmieniamy. Polecamy film Zatańcz ze mną ( Shall we Dance ) z Richardem Gere i Jennifer Lopez.<br/><br/>
Zajęcia odbywają się zazwyczaj w aulach, salach gimnastycznych szkół lub w salach domów kultury. Z tego względu zawsze obowiązuje zasada przynoszenia na zajęcia obuwia zmiennego, niekoniecznie tanecznego. Ponieważ na zajęciach przy okazji tańczenia szybkich tańców, jak Rock and Roll czy Quickstep, dostajemy wycisk, dobrze jest też zabrać ze sobą coś do picia, odświeżenia się, ręcznik i przybory toaletowe, ewentualnie koszulę na zmianę.<br/><br/>
Bywa tak, że na zajęcia przychodzą pary, rozwiązanie to ma sporo oczywistych zalet jednakże nie ma obowiązku przychodzenia z partnerem, czy partnerką , ważne są chęci by nauczyć się tańczyć.<br/><br/>
Na Światowy Program Tańca, z którego korzystamy w nauczaniu, składają się między innymi Tańce standardowe - Walc Angielski, Tango Argentyńskie, Walc Wiedeński, Foxtrot , Quickstep, Tańce Latynoamerykańskie - Samba Brazylijska, Cha-cha i Rumba Kubańska, Paso Doble Hiszpańskie, Jive Amerykański oraz dodatkowo Stomp, Rhythm and Blues, Disco parami, Mambo, Rock and Roll... Na życzenie nauczymy Salsy, Bachaty, Kizomby, Poloneza, Tanga Argentino, Krakowiaka, a nawet Mazura...";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass);
        $danceStyle->danceClasses()->save($danceClass8);
        $danceStyle->danceClasses()->save($danceClass20);
        $danceStyle->danceClasses()->save($danceClass21);
        $danceStyle->danceClasses()->save($danceClass25);
        $danceStyle->danceClasses()->save($danceClass26);
        $danceStyle->danceClasses()->save($danceClass28);

        $danceStyle = new DanceStyle;
        $danceStyle->name = "Taniec orientalny";
        $danceStyle->description = "Taniec orientalny (raqs sharqi) jest jednym z najstarszych tańców świata. Liczy sobie przeszło 3 tysiące lat. Na dwory egipskie sprowadzili go Pigmeje. Faraonom spodobały się ich tańce płodności, w których jednym z najbardziej charakterystycznych elementów były okrężne ruchy miednicy.
<br/><br/>
Raqs sharqi nie jest tańcem opanowującym przestrzeń. Jego piękno i siła tkwi w umiejętności nawiązania kontaktu ze swoim ciałem, z poszczególnymi mięśniami. Nieruchomą oś stanowi kręgosłup, wokół którego krążą biodra oraz klatka piersiowa. Tak zwane shimmy (wibracje) rozluźniają obręcz barkową oraz biodrową. Taniec orientalny (raqs sharqi) jest jednym z najstarszych tańców świata. Liczy sobie przeszło 3 tysiące lat. Na dwory egipskie sprowadzili go Pigmeje. Faraonom spodobały się ich tańce płodności, w których jednym z najbardziej charakterystycznych elementów były okrężne ruchy miednicy. 
<br/><br/>
Raqs sharqi nie jest tańcem opanowującym przestrzeń. Jego piękno i siła tkwi w umiejętności nawiązania kontaktu ze swoim ciałem, z poszczególnymi mięśniami. Nieruchomą oś stanowi kręgosłup, wokół którego krążą biodra oraz klatka piersiowa. Tak zwane shimmy (wibracje) rozluźniają obręcz barkową oraz biodrową. 
<br/><br/>
Taniec orientalny będzie dla Ciebie doświadczeniem własnego ciała, sposobem na wyrażenie Twojej osobowości. Pobudzi zmysłowość ruchów, dzięki którym możesz wyrazić swoją kobiecość, delikatność i elegancję. Raqs sharqi jest doskonałą okazją do tego, by spojrzeć na swoje ciało bez wystawiania mu oceny. Tutaj każda z kobiet może być kim tylko zapragnie. Wystarczy uruchomić wyobraźnię, poddać się transowi tańca i zaufać własnej intuicji.
<br/><br/>
Grupa początkująca: <br/>
1. Poznajesz swoje ciało – zestaw podstawowych ćwiczeń izolacyjnych. <br/>
2. Najważniejsze figury w tańcu orientalnym. <br/>
3. Połączysz figury w proste kombinacje, pracując nad płynnością ruchu. <br/>
<br/><br/>
Grupa średnio zaawansowana: <br/>
1. Poznasz figury o wyższym stopniu zaawansowania, wymagające kontroli nad ciałem. <br/>
2. Połaczysz je w kombinacje ze szczególnym uwzględnieniem techniki wykonywania ruchu. <br/>
3. Nauczysz się choreografii powstałej na bazie poznanych figur. <br/>
<br/><br/>
Grupa zaawansowana: <br/>
1. Powtórzysz wszystkie poznane do tej pory figury z uwzględnieniem prawidłowej sylwetki, techniki tańca, opartej w znacznej mierze na izolacjach oraz estetyki ruchu. <br/>
2. Nauczysz choreografii, stanowiącej swobodne połączenie elementów klasycznego tańca orientalnego, folkloru oraz popu arabskiego.";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass15);
        $danceStyle->danceClasses()->save($danceClass16);
        $danceStyle->danceClasses()->save($danceClass17);

        $danceStyle = new DanceStyle;
        $danceStyle->name = "Salsa";
        $danceStyle->description = "Salsa jest popularnym na całym świecie tańcem latyno-amerykańskim o pochodzeniu karaibskim rozwiniętym szczególnie na Kubie i w Ameryce, tańczonym do muzyki również nazywanej salsą. <br/><br/> 
Salsa w muzyce narodziła się w latach 1940–1970 z fuzji rytmów afrokubańskich i karaibskich pod dużym wpływem jazzu. Rozwijała się zarówno na Kubie, w Portoryko, Nowym Jorku, jak i innych krajach latynoskich regionu Karaibów. Początkowo salsą nazywano wiele rozmaitych stylów muzycznych (Guajira, Mambo, Cha-cha, Son Montuno, Changui, Charanga) głównie za sprawą firmy nagraniowej Fania All Stars. Budziło to pewne kontrowersje wśród muzyków (patrz słynne stwierdzenie Tito Puente – Gram mambo, a nie sos). Z czasem kontrowersje ucichły i uznano, że termin ten doskonale oddaje eklektyczny charakter zarówno muzyki jak i tańca. 
<br/><br/>
Salsa czerpie z wielu różnych stylów i w rozmaitych miejscach rozwijała się pod różnymi wpływami. Duże zróżnicowanie spowodowało wyodrębnienie tak zwanych stylów salsy. Style te różnią się krokiem podstawowym, rytmicznym umiejscowieniem kroków (np. taniec na 1 lub 2) w muzyce, geometrią tańca (taniec po kole lub w linii), sposobem prowadzenia partnerki, ilością elementów akrobatycznych w tańcu, istnieniem bądź brakiem elementów solowych. Salsa na Kubie powstała jako połączenie tańca son z kubańską rumbą. Salsa w Portoryko rozwinęła się pod wpływem lokalnych tańców. Do Stanów Zjednoczonych zaś została przyniesiona przez imigrantów z regionu Karaibów (w większości z Portoryko).<br/>
Salsa tańczona jest do muzyki w metrum 4/4 opartej na dwutaktowych frazach. Cały szkielet rytmiczny salsy oparty jest na rytmie zwanym po hiszpańsku clave (czyli klucz) granym przez instrument o nazwie claves. Claves to po prostu dwa okrągłe kawałki drewna, którymi uderza się o siebie. W dwóch taktach salsy występuje 5 uderzeń clave w jednej z dwóch odmian (clave 2/3 lub clave 3/2). W ciągu tych dwóch taktów tancerz zazwyczaj wykonuje 6 kroków (3 w pierwszym i 3 w drugim takcie). Uderzenia 4 i 8 są to zazwyczaj uderzenia w których występuje pauza (w niektórych stylach pauza może występować na 1 i 5) która może być akcentowana np. poprzez tak zwany tap (czyli przytup).<br/>
Salsa jako taniec użytkowy, wykorzystywany do tańczenia w klubach na często zatłoczonych parkietach, ogranicza powierzchnię, po której porusza się para. W przeciwieństwie do turniejowych tańców towarzyskich, para tańcząca salsę nie przemieszcza się po całym parkiecie, tylko przez większość tańca zajmuje niewielki jego fragment.<br/>
Salsę można tańczyć rozmaicie umiejscawiając krok podstawowy w 2 taktach. Aby uwzględnić te różnice zdefiniowano pojęcie break, czyli moment w którym zmieniany jest kierunek poruszania się tancerzy. Jeśli mówimy, że ktoś tańczy na raz to mamy na myśli, że break w jego tańcu wypada na pierwsze i piąte uderzenie w muzyce. Jeśli na dwa to break wypada na drugie i szóste uderzenie.<br/>
Obecnie w różnych miejscach świata salsę tańczy się na każde z czterech uderzeń w takcie. Salsę w stylach północnoamerykańskich tańczy się na 2 lub 1. Salsę w stylach kubańskich tańczy się zazwyczaj na 1, 3 lub 4 (tak zwane a contra tiempo).<br/>
Salsę przez większą część czasu tańczy się w parze. Jednak bardziej zaawansowani tancerze pozwalają sobie często na sekwencję improwizowanych kroków solowych w celu popisania się swoją umiejętnością tańca. Sekwencje takie określa się angielskim mianem shines lub shine steps. Tańczone są one głównie w stylach północnoamerykańskich czyli stylach cross-body. Kroki te powinny być właściwie umiejscowione w muzyce. Zazwyczaj należy wykonywać je w momencie gdy grę solową rozpoczyna sekcja perkusyjna a pozostałe instrumenty milkną. Pozwala to podkreślić rytm przez wykonywanie kroków na poszczególne uderzenia instrumentów perkusyjnych.<br/>
Salsa, z opisanymi poniżej stylami, obecnie zyskuje na popularności i podobnie jak Tango argentyńskie staje się najpopularniejszym tańcem użytkowym tańczonym w klubach w rytm stale rozwijanej nowoczesnej muzyki granej przez zespoły bądź przez didżejów.";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass11);
        $danceStyle->danceClasses()->save($danceClass12);
        $danceStyle->danceClasses()->save($danceClass13);

        $danceStyle = new DanceStyle;
        $danceStyle->name = "Bachata";
        $danceStyle->description = "Bachata (czyt. baciata), to bardzo sensualny, pogodny i nastrojowy rodzaj muzyki oraz tańca. Powstał na Dominikanie i pierwotnie ewoluował w wiejskich, rolniczych terenach, a tematyka piosenek jest przede wszystkim romantyczna i uczuciowa. Tancerze swoimi choreografiami opowiadają o wszystkich uczuciach towarzyszących miłości. Pierwsi muzykanci wykorzystywali często nietypowe, łatwo dostępne przedmioty, niekoniecznie instrumenty muzyczne.
<br/><br/>
Na Dominikanie bachata towarzyszy ludziom wszędzie, w każdym barze, sklepie, mieszkańcy notorycznie nucą to pod nosem. Dzisiaj Bachata zyskała większą popularność na całym świecie i obok Kizomby stała się stałym elementem latynoskich imprez i salsotek. Spowodowało to wyłonienie się kilku nurtów Bachaty, w naszej Szkole Tańca obecnie koncentrujemy się na nauczaniu Sensual Bachata.
<br/><br/>
Taniec Bachata rozliczany jest do 4. Krok podstawowy jest dosyć prosto skonstruowany. Krok podstawowegy można opisać następująco: rozpoczynając np. od prawej nogi 	robimy 3 kroki chasse w prawo, a następnie dostawiamy wolną lewą nogę, tap. To samo powtarzamy zaczynając lewą nogą od chasse. Liczymy 1,2,3 i 4. Możemy się przemieszczać do przodu i do tyłu, obracać lub oczywiście zastosować nieskończoną ilość połączeń i atrakcyjnych figur. Bachatę Sensualną charakteryzuje obszerna praca bioder i korpusu oraz bardzo bliski kontakt tańczących partnerów. Oczywiście to partnerka zawsze decyduje o dystansie miedzy tańczącymi.";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass3);
        $danceStyle->danceClasses()->save($danceClass9);
        $danceStyle->danceClasses()->save($danceClass23);
        $danceStyle = new DanceStyle;
  
        $danceStyle->name = "Kizomba";
        $danceStyle->description = "Kizomba to nowy nurt w tańcu i muzyce powstały w Angoli w latach 70-80. Zaczęło ją tańczyć młode pokolenie poszukujące w tańcu więcej zmysłowości i czułości. Muzyka Kizomby wywodzi się bezpośrednio z karaibskiego Zouk'a, tyle, że często ma mocniejsze uderzenia. Postawa i trzymanie partnerów nawiązuje do Tanga argentyńskiego, gdyż to po nim odziedziczył sztywną ramę, prowadzenie w parze, kroki outside, wszelkie rodzaje swivli, a niekiedy całe figury jak np. Salida.
<br/><br/>
Dynamiczne stawianie nóg z góry ma prawdopodobnie swoje podłoże w Sembie,w której ruch bounce, zaczerpnięty jest z brazylijskiej Samby. Tarraxinha jest wykorzystaywana do wolnej, muzyki Kizomby, bazową figurą jest Tarraxa,która ma na celu dotarcie się partnerów w sferze seksualnej. Taniec Kizomba, jest niezwykle zmysłowy, opiera się na bliskim kontakcie między partnerami. Jego użytkowy charakter, ruch ciała, ciekawe i praktyczne prowadzenie w parze oraz dynamiczna muzyka sprawiają, że taniec ten z roku na rok przyciąga coraz większe grono zwolenników.
<br/><br/>
Dzięki prostemu rytmowi, który, jak twierdzą najlepsi tancerze Kizomby, wybija rytm serca, oraz czasem niesamowitemu brzmieniu muzyki, Kizomba jest łatwo przyswajalna dla wszystkich, a zatańczenie Kizomby z ukochaną, na białym piasku karaibskiej plaży przy fantastycznym zachodzie słońca to coś czego nie sposób wycenić. Nasz Kurs Kizomby poruszy Wasze serca, natomiast o karaibską plażę musicie zadbać sami...";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass4);
        $danceStyle->danceClasses()->save($danceClass10);
        $danceStyle->danceClasses()->save($danceClass24);

        $danceStyle = new DanceStyle;
        $danceStyle->name = "Hiphop";
        $danceStyle->description = "Hip Hop - ruch kulturowy, rozpoczęty przez Afroamerykanów i Latynosów we wczesnych latach 70. XX wieku w nowojorskim Bronksie. Hip-hop zaczął przenikać do świata kultury masowej na początku lat 80. W następnej dekadzie zaczął zyskiwać popularność w innych rejonach świata.<br/>
Ojcem ruchu hip-hopowego był DJ Kool Herca (który przybył z Jamajki do Nowego Jorku w roku 1967), jednak dopiero w sierpniu 1973 swoją imprezą na Sedgwick Avenue dał początek temu, co dziś jest multimiliardowym przemysłem. Pierwszą osobą, która użyła określenia „hip-hop” był najprawdopodobniej DJ Hollywood. Natomiast Afrika Bambaataa był pierwszym, który tym mianem określił całą kulturę, wyróżniając jej podstawowe elementy.
 <br/><br/>
Cztery główne aspekty, bądź elementy kultury hip-hop to:<br/>
 • MCing (rapowanie) <br/>
• DJing <br/>
• graffiti <br/>
• b-boying (znany też jako breakdance)
<br/><br/>
Niektórzy dodają też aktywizm polityczny, modę hiphopową, slang, przemysł filmowy, teatr, czy nawet architekturę. Hip-hop jest pokrewny z muzyką reggae w jej różnych postaciach, z którym to ruchem łączy go postawa społeczna i antyestablishmentowa ideologia oraz aspekt sztuki ulicznej i folkloru miejskiego. Rap jako awangardowy gatunek muzyczny tworzony jest zwykle za pomocą rapowania i produkcji beatów (albo też DJingu).
 Kultura hip-hopu w swoim pochodzeniu wywodzi się przede wszystkim ze zmarginalizowanych społecznie środowisk. Jest niekonformistyczna w odniesieniu do zachodniego systemu wartości i estetyki, np. akceptuje łamanie prawa, nie stroni od wulgarnej ekspresji. 
 Za datę „narodzin” hip-hopu oficjalnie uznaje się 12 października 1973 roku – jest to również początek niezwykle ważnej w historii hip hopu organizacji Zulu Nation stworzonej przez Bambaataa.
<br/><br/>
New School / New Style <br/>
W latach 90 gdy hip hop music nadal się rozwijała i odeszła trochę do funku, zwolniła, bit stał się cięższy i bardziej agresywny. Dało to początek nowemu stylowi hip hop dance, większość była tańczona u góry w pionie w przeciwieństwie do B-boyingu, który słynie ze swojej pracy przy podłodze. New Style inspirowany był wieloma starszymi stylami street dance i został scalony, zmieszany w coś nowego. Oto kilka specyficznych stylów zaliczających się do new style: krumping, harlem shake, snap dancing, blood walk, clown walk, hill toe, booty popping, 1,2 step, crip walk. Po sklasyfikowaniu nowej szkoly hip hopu jako odrębnego stylu tańca, jego popularność wzrastała na coraz większych zawodach street dance, takich jak „Juste Debout” które zawarło new style jako oddzielną kategorię. Wiele z nowych stylów hip hopu można zobaczyć w dzisiejszych, skierowanych do młodzieży, teledyskach muzycznych programów takich jak MTV. 
<br/><br/>
Old School<br/>
Old school hip hop dances powstały w latach 1970, 1980 i tańczone były zwłaszcza do funku i old school hip hop music. B-boying jest najlepiej znany spośród wszystkich hip hop dance styles i jest uważany za kamień węgielny kultury hip hop. W latach 80 wiele technik funk dance styles, które powstały oddzielnie od hip hopu, jak popping i locking, było wchłanianych do kultury hip-hopowej oraz zauważanych podczas pokazów b-boyowych. 
<br/><br/>
Street Dance <br/>
To ogólna nazwa, pod którą można podpisać wszystkie style tańca które ewoluowały poza szkołami tańca. Street Dance miał swoje początki na ulicach, na boiskach szkolnych i w nocnych klubach. Z natury towarzyski i pełen improwizacji, pobudzający do interakcji i kontaktu z oglądającymi i innymi tancerzami. Dzisiaj pojęcie Street Dance używane jest w odniesieniu do wielu tańców hip hop i stylów funk dance, które pojawiły się w Stanach na początku lat 70-tych, ewoluowały w dzisiejszą kulturę hip-hopową i nadal się rozwijają. Wiele z tych stylów uważanych jest za wywodzące się ściśle ze środowisk afro amerykańskich. 
<br/><br/>
Hip Hop Dance <br/>
Odwołuje się do stylów tańca głównie tańczących do muzyki hip hop lub które ewoluowały jako część kultury hip hop. Hip Hop Dance może być podzielony na old school i new school, ale ten podział nie jest czymś wyraźnym i ewoluował z mijającym czasem. Hip Hop Dances to zwykle  street dances, ponieważ tak samo powstały i się rozwijały. 
<br/><br/>
Krumping <br/>
Jest szybko rozprzestrzeniającym się stylem tańca hip hop. Zapoczątkowany przez afro-amerykańską społeczność południowego i centralnego Los Angeles w Kalifornii. Jest stosunkowo nową formą wielkomiejskiego ruchu czarnego tańca. Jest wolny (nie ograniczony sztywnymi regułami), ekspresyjny i bardzo energetyczny. Krumping ma swoje początki w tradycyjnych afrykańskich tańcach. W filmie Rize, David Lachapelle używa tancerzy z afrykańskich wiosek i przeplata je ze scenami pojedynków Kramperów by pokazać podobieństwa. Krump czy Krumping miał swoje źródła w: Clowningu oraz w stylu zwanym Tańcem Klauna (Clown-Dancing Style). Powstał jako manifestacja ruchu czarnego tańca. Taniec klauna stworzył na początku lat 90-tych Thomas Johnson tj. Tommy the Clown. Uważał taniec za pozytywne ujście. Wierzył, że człowiek może uniknąć wciągnięcia do gangu lub przemocy związanej z byciem w nim poprzez zaangażowanie w taniec. By rozwijać Clowning, mieszał lokalne elementy czarnego tańca: G dance czy Gangsta(er) boogie. Clowning także zawiera pewne elementy Jamajskiego Tańca, tj. butterfly (motyl) czy rodeo, również czerpie ruchy z poppingu, lockingu – dwóch starszych i bardziej sprecyzowanych form czarnego tańca związanego z Bboyingiem. Z Clowningiem wiąże się również malowanie twarzy – bezpośrednio wynikające z pochodzenia tego stylu i stosowane podczas pokazów Tommiego Klauna. Stosując ten styl tańca by ulepszać występ i reklamować swój biznes, Tommy zyskiwał złą sławę w okolicy. Ale z czasem znaczna liczba okolicznej młodzieży zainteresowała się jego tańcem, co umożliwiło mu zająć się tylko i wyłącznie nauczaniem ich nowego stylu. Zyskiwał wielu naśladowców, którzy byli przezywani Hip-Hopowymi Klaunami (the Hip Hop Clowns) 
Występował publicznie ze swoimi najlepszymi dzieciakami (tancerzami w wieku od 6 do 20 lat). Po paru latach był w stanie otworzyć szkołę/akademię w południowo centralnym Los Angeles. Ten podziemny ruch szybko rozprzestrzenił się poza południowo centralny Los Angeles i zajął resztę Kalifornii i dalej. Obecnie istnieje około 50 Clowning grup. Krumping dołączył do głównego nurtu hip-hopu poprzez występy w wielu różnorodnych teledyskach. Zróżnicowanie w Krumpingu pojawiło się wtedy, gdy pokolenie pierwszych hip-hopowych klaunów podrosło. Zaczęli czegoś szukać, inaczej patrzeli już na ten styl niż Tommy, odeszli od dziecięcej natury Klauningu. Indywidualiści jak Main Event, Tight Eyes, Big Mijo, D_Foxxx a.k.a De’Andre Green, Jay Smooth są tymi którzy zapoczątkowali Krumping, a Lil’C, poprzez to, że bardzo dużo wniósł do Krumpingu jest jednym z jego ojców chrzestnych (patrz Kings of Krump). Dokładniej, bardzo ważne i niezbędne jest by tytułować ich jako pierwsze pokolenie, starsi lub wielcy domownicy lub królowie krumpingu ponieważ tylko oni mają prawo do tych tytułów, jakkolwiek inni krumperzy mogą być znani i rozpoznawalni od tymi trzema nazwami. Po 2006 w Krumpingu rozwinęło się wiele różnorodnych styli: Goffy, Rugged, Beasty, Grimey, Flashy, Cocky, Jerky, Bully, Tricks i wiele innych. 
<br/><br/>
Popping <br/>
Popping to kolejny styl stworzony przez Sama. Ludzie nie dokładnie wiedzą jaki to jest styl. Myśla że to jest nazwa dla wszystkich stylów które powstaly podczas ruchu funkowego (w Californii w latach 1970). Jednak tak nie jest. Popping jest stylem samym w sobie, który dotyczy łamania nóg do tyłu, ciągłego napinania mieśni (zacinka) w rytm bitu, żeby dać łamany efekt. Popping jest niepowtarzalny. To nie jest uniwersalna nazwa dla wszystkich stylów funkowych. Jeżeli popujesz, jesteś poperem, Jeżeli machasz, jesteś waverem. I TU ZASADZKA jeźeli boogaloojesz, jesteś boogaloojerem i tak dalej. Sam mówił słowo pop każdego razu gdy się wyginał podczas tańca, w podobny sposób jak niektórzy wydają z siebie odgłosy maszyn robiąc robota. Sam mówił: pop,pop,pop. Ludzie mówili mu: hej zrób te pop coś tam rzeczy!. Wielu może zapytać czym jest electric boogaloo. Jest to mieszanka stylów popping i boogaloo. Oba te style szanują się wzajemnie i na całym świecie są znane pod skrótem EB.
Inne style : Animation, Boogaloo, Bopping, Centipede, Crazy Legs, Cobra, Dime, Stopping, Filmore, Floating/Gliding, Hitting, Popping, Puppet, Robot, Saccin, Scarecrow, Snaking, Spiderman, Sticking, Strobing, Strutting, Ticking, Tutting, Waving ";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass2);
        $danceStyle->danceClasses()->save($danceClass6);
        $danceStyle->danceClasses()->save($danceClass7);
        $danceStyle->danceClasses()->save($danceClass18);
        $danceStyle->danceClasses()->save($danceClass19);
        $danceStyle->danceClasses()->save($danceClass22);

        $danceStyle = new DanceStyle;
        $danceStyle->name = "ZUMBA";
        $danceStyle->description = "Zumba to zupełnie niesamowite połączenie tańców latynoskich prosto z serca Karaibów i Południowej Ameryki z aerobikiem, dzięki którym można spalić nawet 500 - 800 kalorii, zyskując doskonałą kondycję... Zajęcia Zumby zawsze przynoszą spodziewany efekt, przy czym nie są tak monotonne jak tradycyjny aerobic, ponieważ cały czas tańczymy do innej, zróżnicowanej szybkością i rytmem, muzyki. Zumba łączy w sobie energetyczną i motywującą, a przy tym popularną, muzykę z dość prostymi krokami oraz układami tanecznymi, ćwiczenia opierają się na zasadzie tańczenia dla przyjemności i są raczej łatwe do wykonania. 
<br/><br/>
Zumba to zajęcia fitness poprawiające sylwetkę i pozwalające na zrzucenie wagi w bardzo atrakcyjny, miły i wdzięczny sposób. To przede wszystkim dużo świetnej zabawy, uczestnicy nie zdają nawet sobie sprawy, że ćwiczą, a po pewnym okresie zaskakują ich rezultaty zajęć. 
<br/><br/>
Zumba, jako trening cardio łączy zabawę z wysiłkiem, poprawia samopoczucie, wyzwala pozytywną energię, ale również rzeźbi i ujędrnia nasze ciało. Zrywa z monotonią normalnych zajęć grupowych i jest bardziej intensywna od wielu z nich . Cumbia, merengue, salsa, samba, cha-cha, mambo, afro, twist, reggaeton, flamenco, rumba, taniec brzucha oraz wiele nowych propozycji cyklicznie napływających z USA od twórcy i głównego choreografa Zumby, Alberto Beto Pereza. 
<br/><br/>
Zumba jest dla każdego bez względu na wiek, płeć i kondycję. Łatwe do naśladowania kroki taneczne, ciekawie urozmaicona kompozycja ruchów i energetyczna muzyka wprawia wszystkich w optymistyczny nastrój pobudzając do zabawy. Ćwiczenia sprawiają przyjemność, a każdy daje z siebie tyle ile może. Mówiąc krótko, Zumba to zajęcia, podczas których każdy uczestnik świetnie się bawi, a przy tym pracuje nad osiągnięciem doskonałej formy fizycznej.";
        $danceStyle->save();
        $danceStyle->danceClasses()->save($danceClass5);
        $danceStyle->danceClasses()->save($danceClass14);
        $danceStyle->danceClasses()->save($danceClass27);

    }
}
