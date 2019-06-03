<?php
//$link['base'] = 'http://localhost/fizyka/';
$link['base'] = 'http://fizyka.cba.pl/';
$link['home'] = $link['base']."index.php";

$data['titles'] = array(
                        'f1'=> 'Ruch Postępowy',
                        'f2'=> 'Siła',
                        'f3'=> 'Praca, Moc, Energia',
                        'f4'=> 'Hydrostatyka',
                        'f5'=> 'Grawitacja',
                        'f6'=> 'Bryła sztywna',
                        'f7'=> 'Fale',
                        'f8'=> 'Termodynamika',
                        'f9'=> 'Elektrostatyka',
                        'f10'=> 'Prąd stały',
                        'f11'=> 'Elektromagnetyzm',
                        'f12'=> 'Optyka',
                        'f13'=> 'Dualizm',
                        );
$data['f1'] = array(
                    '1'=> array(
                                'question'=>'1.1 Julek ma trening o sidemnastej. O której najpóźniej musi wyjść z domu, aby dotrzeć na miejsce 15 minut przed treningiem, jeżeli ma do przebycia 14 km? Średnia szybkość z którą jedzie autobus o tej porze dnia, wynosi 35 km/h.',
                                'answer'=> "fa1"
                                ),
                    '2'=> array(
                                'question'=>'1.2 Gośka i Ewa umówiły się na godzinę piętnastą na rowery w parku. Gośka kończy swoje zajęcia o 14.15, a Ewa 20 minut później. Z jaką minimalną szybkością msiałaby jechać na rowerze każda z nich, żeby zdążyć, jeżeli Gośka ma do przebycia odlegoś 7km, a Ewka 3 km?',
                                'answer'=> "fa2"
                                ),
                    '3'=> array(
                                'question'=>'1.3 W czasir pierwszych 30 minut kierowca jedzie atostradą z Krakowa do Chrzanowa ze średnią prędkością 95 km/h. Następnie zjeżdża z autostrady i     przez kolejne 45 minut porusza się ze średnią szybkością 45 km/h. Oblicz średnią szybkość kierowcy na całej trasie.',
                                'answer'=> "fa3"
                                ),
                    '4'=> array(
                                'question'=>'1.4 Rowerzysta przez półtorej godziny treningu jedzie ze średnią szybością 12 m/s, a kolejne 6 km przebywa w czasie 10 minut. Obliczs średnią     szybkośćrowerzysty w czasie całego treningu.',
                                'answer'=> 'fa4'
                                ),
                    '5'=> array(
                                'question'=>'1.5 Pierwsze cztery okrążenia, o długości 400 metrów każde, lekkoatleta przebiega w czasie 4 min i 20 sekund, kolejne trzy i pół okrążenia w czasie 6 minut, a ostatnie 200 m przebiega z szybkością 8 m/s. Oblicz średnią prędkość lekkoatlety podczas całego biegu.',
                                'answer'=> 'fa5'
                                ),
                    '6'=> array(
                                'question'=>'1.6 Elka codziennie biega. Oblicz jej średnią szybkość wiedząc, że pierwszą połowę drogi przebiegła z szybkością 2,4 m/s, a drugą połowę z szybkością 1,2 m/s',
                                'answer'=> 'fa6'
                                ),
                    '7'=> array(
                                'question'=>'1.7 Oblicz średnią szybkość kierowcy na trasie Kraków-Sandomierz, wiedząc,że przez pierwszą połowę czasu poruszał się on ze średnia prędkością 50     km/h, a przez drugą połowę, ze śrenią prędkością 80 km/h',
                                'answer'=> 'fa7'
                                ),
                    '8'=> array(
                                'question'=>'1.8 Pierwszą połowę drogi z Krakowa do Krościenka bus przebywa ze średnią prędkością 30 km/h, drugś połowę ze średnią szybkością 60 km/h. W drodze    powrotnej przez pierwszą połowę czasu poruszał się ze śrenią szybkością 80 km/h, a przez drugą połowę czasu ze średnią szybkością 60 km/h. Oblicz    średnie szybkości busa na trasach:
                                 a) z Krakowa do Krościenka 
                                 b) Z Krościenka do Krakowa
                                 c) z Krakowa do Krościenka i z powrotem',
                                'answer'=> 'fa8'
                                ),
                    '9'=> array(
                                'question'=>'1.9 Średnia szybkość motocykli na całej drodze była równa 30 m/s. Jeżeli 1/3 drogi przebył z szybkością 2 razy większą niż pozostałe 2/3 drogi, to    z jaką szybkością średnią przebył każdy z odcinków?',
                                'answer'=> 'fa9'
                                ),
                    '10'=> array(
                                'question'=>'1.10 Motocyklista całą trasę przebył ze średnią szybkością 90 km/h. Oblicz z jaką średnią szybkością poruszal się w pierwszej połowie czasu ruchu,    jeżeli jego śrenia szybkość była wówczas trzy razy mniejsza niż w drugiej połowie czasu.',
                                'answer'=> 'fa10'
                                ),
                    '11'=> array(
                                'question'=>'1.11 Marysia wyszła z domu do sklepu oddalonego o 300 m. W sklepie zorientowała się, że nie wzieła portfela, więc musiała wrócić do domu. Oblicz      średnią prędkość dziewczynki , jeżeli od jej wyjśia z domu do jej powrotu mineło 10 minut',
                                'answer'=> 'fa11'
                                ),
                    '12'=> array(
                                'question'=>'1.12 Dla młodzieży przygotowano tor gokartowy w kształcie okręgu o promieniu 12 m. Oblicz:
                                  a) średnią szybkość i wartość średniej prędkości zawodnika, który przebył dziesięć pełnych okrążeńw czasie 75,36s;
                                  b) wartość średniej prędkości zawodnika po czasie odpowiednio równym 1/4 okresu (czyli czasu, w którym zawodnik wykonuje jedno pelne                   okrążenie). 1/2 okresu, 1/6 okresu',
                                'answer'=> 'fa12'
                                ),
                    '13'=> array(
                                'question'=>'1.13 Ruch jednego ciała opisano równaniem x1(t) = 5+ 6t,a drugiego ciała równaniem: x2(t) = 35 - 5t (w równainiach tych współczynniki liczbowe są podane w odpowiednich jednostkach SI).Dla pierwszych pięciu sekund obu ruchów narysuj:
                                  a) wykresy współrzędnej położenia x(t),
                                  b) wykresy współrzędnej prędkości v(t).',
                                'answer'=> 'fa13'
                                ),
                    '14'=> array(
                                'question'=>'1.14 Korzystając z zamieszczonego obok wykresu zależności współrzędnej prędkości od czasu w pewnym ruchu prostoliniowych wzdłuż osi x, wykonaj polecenia :
                                  a) Narysuj wykres zależności drogi przebytej w tym ruchu od czasu,
                                  b) Oblicz średnia szybkość w całym ruchu. Wynik podaj w km/h,
                                  c) Narysuj wykres zależności położenia od czasu, jeżeli x0 = 0,
                                  d) Oblicz wartość średniej prędkości w tym ruchu. Wynik podaj w km/h.',
                                'answer'=> 'fa14'
                                ),
                    '15'=> array(
                                'question'=>'1.15 Pies przebiegł po trawniku z punktu P do punktu K w czasie 14 sekund. Tor jego ruchu przedstawia odcinek PK na wykresie y(x).
                                  a) Rozstrzygnij, czy na podstawie wykresu można wyciągnąć wniosk, jakim rodzajem ruchu poruszał się pies,
                                  b) Oblicz drogę drogę przebytą przez psa. 
                                  Mając dodatową iformacjeę, że ruch psa był ruchem jednostajnym oblicz:
                                  c) jego szybkość 
                                  d) współrzędne v(x) i v(y) jego prędkosci.',
                                'answer'=> 'fa15'
                                ),
                    '16'=> array(
                                'question'=>'1.16 Skorzystaj z rysunków poniżej i napisz równania ruchu x(t) dla każdego z samochodów, które poruszały się ruchem jednostajnym
                                Narysuj wykresy współrzędnej prędkości od czasu dla tych ruchów.',
                                'answer'=> 'fa16'
                                ),
                    '17'=> array(
                                'question'=>'1.17 Przez pierwsze 4 minuty ruchu Ala biegła wzdłuż prostej, równoległej do osi x zgodnie z jej zwrotem ze stałą szybkością 5 m/s, przez kolejne 5 minut ruchu wzdłuż tej samej prostej ze stałą szybkością 6 m/s. Następnie zawróciła i przez kolejne 8 minut biegła wzdłuż tej samej prostej z szybkością 3 m/s w kierunku punktu, z którego wystartowała. Napisz równania x(t) dla każdego etapu ruchu i narysuj wykres zależności położenia od czasu, jeżeli x(0) = 0',
                                'answer'=> 'fa17'
                                ),
                    '18'=> array(
                                'question'=>'1.18 Młoda foka, widząc orkę w odległości 50 m za sobą, zaczyna uciekać z szybkością 43,2 km/h. Orka płynie w jej kierunku z szybkością 50,4 km/h. Napisz równania ruchu foki i orki, przyjmując, że dla orki x(0) = 0. 
                                a) Oblicz czas po którym orka dogoni fokę,
                                b) Oblicz współrzędną miejsca spotkania zwierząt.',
                                'answer'=> 'fa18'
                                ),
                    '19'=> array(
                                'question'=>'1.19 PanZbyszek z Gniezna i pan Roman z Warszawy odległej od Gniezna o 240 km umówili się o 10 rano wyjadą ze swoich miejscowości - pan Zbyszek w kierunku Warszawy, a pan Roman w kierunku Gniezna...',
                                'answer'=> 'fa19'
                                ),
                    '20'=> array(
                                'question'=>'1.20 Dwaj kajakarze poruszają się wzdłuż tej samej prostej. Pierwszy zaczyna ruch z miejsca oznaczonego START i płynie przez pierwsze 25 sekund z szybkością 3 m/s, a następnie z szybkością 2 m/s. Drugi kajakarz płynie z szybkością 3,5 m/s...',
                                'answer'=> 'fa20'
                                ),
                    '21'=> array(
                                'question'=>'1.21 Gepard poruszając się ruchem jednostajnie przyspieszonym z szybkością początkową równą zeru, w czasie 12 sekund przebywa drogę 216. Oblicz wartość przyspieszenia geparda...',
                                'answer'=> 'fa21'
                                ),
                    '22'=> array(
                                'question'=>'1.22 Samochód ciężarowy porusza się rychem jednostajnie przyspieszonym z przyspieszeniem o wartości 0,8 m/s2. Oblicz po jakim czsie samochód osiągnie szybkość 64,8 km/h...',
                                'answer'=> 'fa22'
                                ),
                    '23'=> array(
                                'question'=>'1.23 W czwartej sekundzie ruchu motocyklista, poruszając się ruchem jednostajnie przyspieszonym przebył drogę 8 m. Oblicz wartość jego przyspieszenia, jeżeli v(0) = 0',
                                'answer'=> 'fa23'
                                ),
                    '24'=> array(
                                'question'=>'1.24 Rowerzysta poruszając się bez prędkości początkowej ruchem jednostajnie przyspiesznym, po 20 sekundach ruchu osiągnął szybkość 5,4 km/h. Oblicz drogę przebytą przez rowerzystę w ósmej sekundzie ruch.',
                                'answer'=> 'fa24'
                                ),
                    '25'=> array(
                                'question'=>'1.25 Ciało poruszało się przez 15 s ruchem jednostajnie przyspieszonym bez prędkości początkowej. Oblicz drogę przebytą w ostatniej sekundzie ruchu, jeżeli po 5 s od chwili rozpoczęcia...',
                                'answer'=> 'fa25'
                                ),
                    '26'=> array(
                                'question'=>'1.26 Ciało poruszało się przez 30 ruchem jednostajnie przyspieszony, bez prędkości początkowej. W czasie trzeciej i czwartej sekundy przebyło łącznie drogę 15 m. Oblicz drogę przebytą w ostatniej sekundzie ruchu...',
                                'answer'=> 'fa26'
                                ),
                    '27'=> array(
                                'question'=>'1.27 Samochód jadąc ruchem jednostajnie przyspieszonym, zwiększył swoją szybkość od 18 km/h do 90 km/h na drodze 450 m. Oblicz czas, w którym to nastąpiło.',
                                'answer'=> 'fa27'
                                ),
                    '28'=> array(
                                'question'=>'1.28 Motocyklista jadąc ruchemjednostajnie przyspieszonym, zwiekszył swoją szybkość 3,5 razy w czasie 2 minut i 20 sekund. Oblicz drogę, którą przebył w tym czasie, jeżelijego szybkość początkowa wynosiła 36 km/h.',
                                'answer'=> 'fa28'
                                ),
                    '29'=> array(
                                'question'=>'1.29 W czasie 10 s ciało poruszające się ruchem jednostajnie przyspieszonym przebyło drogę 175 m i osiągneło szybkość 90 km/h. Oblicz wartość przyspieszenia i jego szybkość początkową.',
                                'answer'=> 'fa29'
                                ),
                    '30'=> array(
                                'question'=>'1.30 Pociąg TGV hamuje od szybkości 199,,8 km/h aż do zatrzymania się w czasie 1 minuty i 12 sekund. Oblicz drogę hamowania, przyjmując, że ruch pociągu jest jednostajnie opóźniony',
                                'answer'=> 'fa30'
                                ),
                    '31'=> array(
                                'question'=>'1.31 Łyżwiarz jadąc ruchem jednostajnie opóźnonym, przebył aż do zatrzymania drogę 25 m w czasie 5 s. Oblicz szybkość początkową łyżwiarza oraz wartość opóźnienia.',
                                'answer'=> 'fa31'
                                ),
                    '32'=> array(
                                'question'=>'1.32 Pojazd w czasie 36 sekund zmiejszył swoja szybkość 1,5 raza, porszając się ruchem jednostajnie opóźnionym. Oblicz drogę przybytą przez pojazd w tym czasie, jeżeli szybkość końcowa wynosiła 36 km/h.',
                                'answer'=> 'fa32'
                                ),
                    '33'=> array(
                                'question'=>'1.33 Motorówka płynąca po jeziorze z szybkością 90 km/h zmniejszyła swoją szybkość do 10 m/s w czasie 5 sekund. Oblicz drogę przebytą przez motorówkę w trzeciej i piątej sekundzie ruchu oraz jej średnią szybkość w trzeciej sekundzie...',
                                'answer'=> 'fa33'
                                ),
                    '34'=> array(
                                'question'=>'1.34 Samochód rusza z punktu P i jedzie z przyspieszeniem o wartości 0,5 m/s2. Po 40 a punkt P mija motocyklista, jadąc za amochodem ze stałą szybkością v= 120 km/h',
                                'answer'=> 'fa34'
                                ),
                    '35'=> array(
                                'question'=>'1.35 Ciało porusza się ruchem prostoliniowym. Jego droga jest następującą funkcją czasu: s(t) = 2 (t + t2) W tym wzorze współczynniki liczbowe są wyrażone w SI...',
                                'answer'=> 'fa35'
                                ),
                    '36'=> array(
                                'question'=>'1.36 W celu opisania ruchu lokomotywy po torze prostoliniowym skierowano oś równolegle do toru ze zwrotem zgodnym z prędkością. Jednak na pewnym odcinku lokomotywa musiała się cofnąć...',
                                'answer'=> 'fa36'
                                ),
                    '37'=> array(
                                'question'=>'1.37 Rysunek przedstawia wykre zależnosći współrzędnej prędkości od czasu dla pewnego czasu, które poruszało się równolegle do osi x...',
                                'answer'=> 'fa37'
                                ),
                    '38'=> array(
                                'question'=>'1.38 Samochód wystartował z miejsca postojui jechał ruchem prostoliniowym z prędkością zwróconą zgodnie ze zwrotem osi x. Na rysunku podano wykres współrzędnej przyspieszenia samochodu w zależności od czasu. Analizujemy jego ruch w czasie 40 pierwszych sekund...',
                                'answer'=> 'fa38'
                                ),
                    '39'=> array(
                                'question'=>'1.39 Tresowana mrówka wędrowała w czasie 16 sekund wzdłuż osi x. W początkowej chwili swojej wędrówki (t0 = 0) znajdowała się w punkcie o współrzędnej x0 = 18 cm. Wykres przedstawia zależność współrzędnej prędkości mrówki od czasu.',
                                'answer'=> 'fa39'
                                ),
                    '40'=> array(
                                'question'=>'1.40 Dwa ciała poruszają się równolegle do osi x. Wykresy obok przetawiają zależność współrzędnej prędkości od czasu dla każdego z tych ciał. Na jego podstawie oblicz dla każdego ciała...',
                                'answer'=> 'fa40'
                                ),
                    '41'=> array(
                                'question'=>'1.41 Wykres przedstawia zależność współrzędnej przyspieszenia od czasu dla ruchu pewnego ciała. Na jego podstawie...',
                                'answer'=> 'fa41'
                                ),
                    '42'=> array(
                                'question'=>'1.42 Rowerzysta i motocyklista jadą postoliniowym odcinkiem szosy równoległej do osi x z prędkościami o przeciwnych zwrotach. W chwili t0 =  rowerzysta mija punkt A, jadąc ruchem jednostajnym z szybkością 3 m/s, a motocyklista w tej samej chwili mija punkt B...',
                                'answer'=> 'fa42'
                                ),
                    '43'=> array(
                                'question'=>'1.43 Dwa samochody A i B poruszają się po tej samej prostej z prędkościami o przeciwnych zwrotach. Każdy z nich jedzie ruchem jednostajnie opóźnionym. Sytuację ilustruje rysunek, na którym zaznaczno początkowe położe środków obu pojazdów na osi x...',
                                'answer'=> 'fa43'
                                ),
                    '44'=> array(
                                'question'=>'1.44 Z prostoliniowym kierunkiem autostrady wiążemy oś x. Z punktu x = 0 w chwili t0 = 0 wyjeżdża opel i jedzie ze stałym przyspieszeniem o wartości 0,8 m/s2 zwróconym zgodnie ze zwrotem osi x...',
                                'answer'=> 'fa44'
                                ),
                    '45'=> array(
                                'question'=>'1.45 Dwa ciała (których rozmiary pomijamy) wyrzucamy pionowo w górę z takimi samymi szybkościami v0 = 0, drugie o delta t później, gdzie delta t jest równe czasowi, po którym pierwsze osiągnie wysokość maksymalną...',
                                'answer'=> 'fa45'
                                ),
                    '46'=> array(
                                'question'=>'1.46 Pierwsze ciało wyrzucone z powierzchni ziemi pionowo w górę z prędkością o wartości 20 m/s. Równocześnie z wysokości H, na którą ciao się wzniesie, zaczyna spadać swobodnie drugie ciało. Rozmiary obu ciał pomijamy...',
                                'answer'=> 'fa46'
                                ),
                    '47'=> array(
                                'question'=>'1.47 Pierwsze ciało wrzucono z powierzchi ziemi pionowo w górę z prędkością o wartości 20 m/s. Równocześnie z wysokości H, na którą to ciało się wzniesie, rzucono drugie ciało z prędkością o takiej samej wartości zwróconą pionowo w dół. Rozmiary ciał pomijamy...',
                                'answer'=> 'fa47'
                                ),
                    '48'=> array(
                                'question'=>'1.48 Gołąb pocztowy porusza się zgodnie z kierunkiem wiatru z szybkością 72 km/h względem ziemi, a pod wiatr z szybkością 6 m/s względem ziemi. Oblicz szybkość wiatru względem ziemi i szybkość gołębia względem ziemi przy bezwietrznej pogodzie.',
                                'answer'=> 'fa48'
                                ),
                    '49'=> array(
                                'question'=>'1.49 Kaśka jadąc rowerem pod wiatr bulwarami Wisły, pokonuje trasę 10 km w czasie 45 minut, a ten sam odcinek z wiatrem w czasie 25 minut. Na tej samej podstawie oblicz...',
                                'answer'=> 'fa49'
                                ),
                    '50'=> array(
                                'question'=>'1.50 Na przeciwległych bzegach rzeki o szerokości d = 13 m leżą dwie przystanie A i B. Położenie przystani B jeft nieco przesunięte w dół rzeki, jak pokazuje rysunek. Kąt...',
                                'answer'=> 'fa50'
                                ),
                    '51'=> array(
                                'question'=>'1.51 Na zawodach żużlowskich dwaj motocykliści startują jednocześnie z tego samego punktu bieżni. Ich średnie szybkości wynoszą odpowiednio 84 km/h i 120 km/h. Oblicz czas, po którym szybszy zawodnik "zdubluje" wolniejszego...',
                                'answer'=> 'fa51'
                                ),
                    '52'=> array(
                                'question'=>'1.52 Przemek z Wojtkiem startują jednocześnie z tego samego bieżni szkolnej w przeciwne strony. Oblicz, po jakim czasie chłopcy miną się pierwszy raz. Bierznia ma długość 360 m...',
                                'answer'=> 'fa52'
                                ),
                    '53'=> array(
                                'question'=>'1.53 Równoległe do siebie po dwóch pasach autostrady poruszają się TIR o długości 10 m jadący z szybkością 90 km/h i motocyklista jadący szybkością 108 km/h. Oblicz czas wyprzedzania TIR-a prze motocyklistę...',
                                'answer'=> 'fa53'
                                ),
                    '54'=> array(
                                'question'=>'1.54 Do zamknięcia terminalu lotniczego pozostało 15 sekund. Oblicz szybkość, z jaką musiałby poruszać się pasarzer względem ruchomych schodów, aby zdążyć przed jego zamknięciem. Długość schodów wynosi 20 m, a ich szybkość 0,8 m/s.',
                                'answer'=> 'fa54'
                                ),
                    '55'=> array(
                                'question'=>'1.55 Miejscowość F i R leżące nad brzegiem rzeki są od siebie oodległe o 270 km. Dwie motorówki, które względem siebie mają taką samą szybkość 54 km/h, wyruszają z nich jednocześnie naprzeciw siebie...',
                                'answer'=> 'fa55'
                                ),
                    '56'=> array(
                                'question'=>'1.56 Samochodzik zabawka jedzie po torze wkształcie okręgu o promieniu 50 cm ze stałąszybkością. Okres ruchu wynosi 4 sekundy. Oblicz:...',
                                'answer'=> 'fa56'
                                ),
                    '57'=> array(
                                'question'=>'1.57 Kulka zawieszona na nitce porusza się ruchem jednostajnym po okręgu z szybkością 3,14 m/s. Oblicz promień okręgu, po którym porusza się kulka, jeżei w czasie pół minuty wykona 75 obrotów.',
                                'answer'=> 'fa57'
                                ),
                    '58'=> array(
                                'question'=>'1.58 Asia porusza się stałą szybkością na karuzeli o promieniu 1,5 m. Wartość przyspieszenia dośrodkowego Asi wynosi 8 m/s2. Oblicz szzybkość kątową i szybkość liniową dziewczynki w tym ruchu.',
                                'answer'=> 'fa58'
                                ),
                    '59'=> array(
                                'question'=>'1.59 Tarcza o średnicy 4m obraca się wokół środka O. Korzystając z rysunku i wiedziąc, że...',
                                'answer'=> 'fa59'
                                ),
                    '60'=> array(
                                'question'=>'1.60 Oblicz stosunek watości przyspieszeń dośrodkowych  trzech punktów leżących na trzech równoleżnikach kui ziemskiej. Pierwszy punkt leży na równiku, szerokość geograficzna drugiego...',
                                'answer'=> 'fa60'
                                ),
                    '61'=> array(
                                'question'=>'1.61 Na wirującej tarczy o średnicy 120 cm leżą na jednym promieniu w pewnej odległości od siebie dwa kamyki, przy czym kamyk 1 znajduje się na brzegu tarczy . Oblicz odległość między kamykami, jeżeli szybkość liniowa...',
                                'answer'=> 'fa61'
                                ),
                    '62'=> array(
                                'question'=>'1.62 Wskazówka godzinowa jest o 1/3 krótsza od wskazówki minutowej. Oblicz, jak się mają do siebie:...',
                                'answer'=> 'fa62'
                                ),
                    '63'=> array(
                                'question'=>'1.63 Wprawiana w ruch karuzela przez pierwsze 4 s porusza się ruchem przyspieszonym. Szybkość dziecka siedzącego na koniku w odległości 2,4 m od osi wzrasta z czasem według wzoru: v = 0,4 m/s2 * t Traktując dziecko jako punkt materialny, oblicz:...',
                                'answer'=> 'fa63'
                                ),
                    
                   );
$data['f2'] = array(
                    '1'=> array(
                                'question'=>'Janek wyrusza o 14, o której wróci?',
                                'answer'=> "fb1"
                                ),
                    ''=> array(
                                'question'=>'',
                                'answer'=> 'fb'
                    
                   );


function dump($var)
{
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}
function dumpe($var)
{
	dump($var);
    exit();
}
function firstKey($var)
{
	foreach($var as $key => $unused) 
    {
        return $key;
    }
}
function getData($var) 
{
    global $data;
    $ret['path'] = 'layouts/Start.php';
    {
        if(array_key_exists('f1', $var)) 
        {
            $section = 'f1';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f2', $var)) 
        {
            $section = 'f2';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f3', $var)) 
        {
            $section = 'f3';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f4', $var)) 
        {
            $section = 'f4';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f5', $var)) 
        {
            $section = 'f5';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f6', $var)) 
        {
            $section = 'f6';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f7', $var)) 
        {
            $section = 'f7';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f8', $var)) 
        {
            $section = 'f8';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f9', $var)) 
        {
            $section = 'f9';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f10', $var)) 
        {
            $section = 'f10';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f11', $var)) 
        {
            $section = 'f11';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f12', $var)) 
        {
            $section = 'f12';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
        if(array_key_exists('f13', $var)) 
        {
            $section = 'f13';
            $number = $var[$section];
            if((int)$var[$section]>count($data[$section]))
            {
                $ret['path'] = 'layouts/404.php';
                return $ret;
            }
            $ret['title'] = $data['titles'][$section];
            $ret['question'] = $data[$section][$number]['question'];
            $ret['answer'] = $data[$section][$number]['answer'];
            $ret['number'] = $var[$section];
            $ret['max_number'] = (string)count($data[$section]) ;
            $ret['path'] = 'Fizyka/task.php';
        }
    }
    if(array_key_exists('cat', $var)) 
    {
        $ret['question'] = array();
        $section = $var;
        $ret['title'] = $data['titles'][$section['cat']];
        foreach ($data[$section['cat']] as &$value) 
        {
            array_push($ret['question'], $value['question']);
        }
        $ret['path'] = 'Fizyka/categories.php';
        $ret['number'] = $var['cat'];
    } 
    return $ret;
}



































