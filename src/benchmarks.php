<?php
/**
 * Created by PhpStorm.
 * User: decebal
 * Date: 09.07.2015
 * Time: 17:11
 */

require_once("Services/timer.php");
use \Services\timer;

error_reporting(-1);
ini_set('display_errors', 'On');
set_time_limit(0);

$bannedArray = include_once("../output/blacklistArray.php");
$bannedString = implode(' ', $bannedArray);

$shortPhrase = "You should eat fruits, vegetables, and fiber every day.";

echo "Starting tests on short phrase with no special characters to be replaced: $shortPhrase <br /><br />";

$time = new timer(1);
for($i=0;$i<=1000;$i++) {
    str_replace($bannedArray, '', $shortPhrase);
}

echo "Did Test 1 in (" . $time->get() ." seconds)<br /><br />";


$time = new timer(1);
$phraseAux = $shortPhrase;
for($i=0;$i<=1000;$i++) {
    foreach ($bannedArray as $bannedValue) {
        $phraseAux = str_replace($bannedValue, '', $phraseAux);
    }
}

echo "Did Test 2 in (" . $time->get() ." seconds)<br /><br />";


$longPhrase = "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$longPhrase .= "You should eat fruits, vegetables, and fiber every day.";

echo "Starting tests on long phrase with no special characters to be replaced: $longPhrase <br /><br />";

$time = new timer();
for($i=0;$i<=10000;$i++) {
    str_replace($bannedArray, '', $longPhrase);
}

echo "Did Test 1 in (" . $time->get() ." seconds)<br /><br />";


$time = new timer(1);
$phraseAux = $longPhrase;
for($i=0;$i<=1000;$i++) {
    foreach ($bannedArray as $bannedValue) {
        $phraseAux = str_replace($bannedValue, '', $phraseAux);
    }
}

echo "Did Test 2 in (" . $time->get() . " seconds)<br /><br />";


$specialLongPhrase = "Półka tancit iłi bo, śtol muzx dev da. Mi dva bruho svekrsestrą, zavod lubim tut es. Bęz ti grod videnie, ńikąi dąjte ożeroś es dla, naśx łubijt bu tri! Sxes miaso ślovis dom on, eda miacx ńożxis stranka ją.

Kai ti zxenuf ząpalka pomocijt, łudiś śłisxil slozxju gąz do, ku divajm kameniś hce. Imajut ekonómju ęda vo. Vnimanie potrebijśx na kai, grod zxiżnuf ostatju mńe vo. Pridij żxenuf ne tut, bo sam kupit ćxistju! Na dva miacx imenijt śvądilju. Iź kai tonkju rąźumil, dumam vozifs hrebęt te tóf?

Oni slavju bistruó cxiśteńię no, dą voląpukio bulgarźęm eśperantio moi. Tó bil pitasx rażumim prinęsijsx, gda żnal sportju da. Vi tolk cenijt obuvząvod sós, gde vi idijm ostatju esperantio? Te din igrajte zdrovie ząpalit, śo ili próśtju razumim, utrątili svękrbrat użx so?

Hćęjm pecxina kak vi, ti cxęm polką gotóvit ęda, premnog prąvdauo obuvzavod hce to! Vse knig kupit prędmętiś bo, bo din email ludis cxetvert? Ńe bil noźxis beźópąśośtif, sxęs polakju ęs tut. Nasx vseźem polnite tof ti, vi tot idijte zńajśx. Sidijm raźlicxju do źxe. Sport dęlame gda só, sam znat mlodicą komputer no.

Lico odevijm oną ón. Des nogas politia soglósili do. Bi voz dopis cxernju rąźumil. On ńavęstib scxastju źembulbas ili, li cxitął glubinju hćę, tę gdą ócxis bęłaruśżem? Da smutju jaźika pisajut bil, om otbral vśęsląvju dóm, on vsę voda ludju ótbrał!

Tó lukas suhju zxę, na tut miacx vsegda usmehili, oni domof informacia iz. Dva tvoi eśperąńtio blagodarijm vi, ńe usta vożifs verijm mne, mi tonkju suhijm iskąjm kak. On eda dirkaś tragedju, ti góstiś zavoduf videnies den. Imam mężxu źńajm vi voz!

Polka męnśx premnog te mnę, vozis sledju imajsx din na. Iz sam edat domovijt śłisxenie. Es kofe zemis ćxitańie kąi, śam da varim rękas śilaju, sąm detęś dolaris słoveńźem iz. Bil zapąlit informacia li, vi dom cxem imame skandalis, dva połąkzem kasxtanju soglośili bu!

Ku vse bratis zxiznuf partner? Sam bólsx hcęmę pólitju bu! Da cxistju politia pravdauo tak, vaśx obuv tot vo? Cxitąt óbuvząvód studęńtis li ońi!

Ku zima pervju sąm, imam ludis traśil bo tri, do ocxis priatełica nąd? Dó sam gótovit pókążit. Bo sam klet tólk cxehzem! Dobrju zapałka gaz on, rusżem rocxis voz iz? Sąm vo imam vołapukio, póka znajsx pokaźit bó den. Tugde duśxijm ku mąi, tonkju dąrijte ukrainźem kąk bó.

Dev bi insxtó velgrod obuvijm, troh eśxte gvóril kai bo. Vsę ońai dumajut tąręlkąs bu, dumam celuvajt pomocijt na kai, vazxnju imenijt źavoduf do vóz. Iź robijt umivałnaf meżxunarodju eda? Voź da sestra pómócijt. Vęcxer sidili igrąjte om dva.

Bo mne ostaj imajt primęr, pókazit obuvzavod om mnę. Ja din energia politikju! Sam dikju cxęhzem ja! Ludiś bratis jązikas diń vo, no ońi żubis głódju rokśanąvoi!";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= implode(' jam ', [
"🝅",
"🝆",
"🔧",
"🔨",
"🔩",
"🔪",
"🔫",
"🔬",
"🔭",
"🔮",
"🔯",
"🔰",
"🔱",
"🔲",
"🔳",
"🝇",
"🝈",
"🝉",
"🝊",
"🝋",
"🝌",
"🝍",
"🝎",
"🝏",
"🝐",
"🝑",
"🚻",
"🚼",
"🚽",
"🚾",
"🚿",
"🛀",
"🝒",
"🝓",
"🝔",
"🝕",
"🝖",
"🝗",
"🝘",
"🝙",
"🝚",
"🝛",
"🔧",
"🔨",
"🔩",
"🔪",
"🔫",
"🔬",
"🔭",
"🔮",
"🔯",
"🔰",
"🔱",
"🔲",
"🔳",
"🝜",
"🝝",
"🝞",
"🝟",
"🚻",
"🚼",
"🚽",
"🚾",
"🚿",
"🛀",
"🝠",
"🝡",
"🝢",
]);
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "You should eat fruits, vegetables, and fiber every day.";
$specialLongPhrase .= "Półka tancit iłi bo, śtol muzx dev da. Mi dva bruho svekrsestrą, zavod lubim tut es. Bęz ti grod videnie, ńikąi dąjte ożeroś es dla, naśx łubijt bu tri! Sxes miaso ślovis dom on, eda miacx ńożxis stranka ją.

Kai ti zxenuf ząpalka pomocijt, łudiś śłisxil slozxju gąz do, ku divajm kameniś hce. Imajut ekonómju ęda vo. Vnimanie potrebijśx na kai, grod zxiżnuf ostatju mńe vo. Pridij żxenuf ne tut, bo sam kupit ćxistju! Na dva miacx imenijt śvądilju. Iź kai tonkju rąźumil, dumam vozifs hrebęt te tóf?

Oni slavju bistruó cxiśteńię no, dą voląpukio bulgarźęm eśperantio moi. Tó bil pitasx rażumim prinęsijsx, gda żnal sportju da. Vi tolk cenijt obuvząvod sós, gde vi idijm ostatju esperantio? Te din igrajte zdrovie ząpalit, śo ili próśtju razumim, utrątili svękrbrat użx so?

Hćęjm pecxina kak vi, ti cxęm polką gotóvit ęda, premnog prąvdauo obuvzavod hce to! Vse knig kupit prędmętiś bo, bo din email ludis cxetvert? Ńe bil noźxis beźópąśośtif, sxęs polakju ęs tut. Nasx vseźem polnite tof ti, vi tot idijte zńajśx. Sidijm raźlicxju do źxe. Sport dęlame gda só, sam znat mlodicą komputer no.

Lico odevijm oną ón. Des nogas politia soglósili do. Bi voz dopis cxernju rąźumil. On ńavęstib scxastju źembulbas ili, li cxitął glubinju hćę, tę gdą ócxis bęłaruśżem? Da smutju jaźika pisajut bil, om otbral vśęsląvju dóm, on vsę voda ludju ótbrał!

Tó lukas suhju zxę, na tut miacx vsegda usmehili, oni domof informacia iz. Dva tvoi eśperąńtio blagodarijm vi, ńe usta vożifs verijm mne, mi tonkju suhijm iskąjm kak. On eda dirkaś tragedju, ti góstiś zavoduf videnies den. Imam mężxu źńajm vi voz!

Polka męnśx premnog te mnę, vozis sledju imajsx din na. Iz sam edat domovijt śłisxenie. Es kofe zemis ćxitańie kąi, śam da varim rękas śilaju, sąm detęś dolaris słoveńźem iz. Bil zapąlit informacia li, vi dom cxem imame skandalis, dva połąkzem kasxtanju soglośili bu!

Ku vse bratis zxiznuf partner? Sam bólsx hcęmę pólitju bu! Da cxistju politia pravdauo tak, vaśx obuv tot vo? Cxitąt óbuvząvód studęńtis li ońi!

Ku zima pervju sąm, imam ludis traśil bo tri, do ocxis priatełica nąd? Dó sam gótovit pókążit. Bo sam klet tólk cxehzem! Dobrju zapałka gaz on, rusżem rocxis voz iz? Sąm vo imam vołapukio, póka znajsx pokaźit bó den. Tugde duśxijm ku mąi, tonkju dąrijte ukrainźem kąk bó.

Dev bi insxtó velgrod obuvijm, troh eśxte gvóril kai bo. Vsę ońai dumajut tąręlkąs bu, dumam celuvajt pomocijt na kai, vazxnju imenijt źavoduf do vóz. Iź robijt umivałnaf meżxunarodju eda? Voź da sestra pómócijt. Vęcxer sidili igrąjte om dva.

Bo mne ostaj imajt primęr, pókazit obuvzavod om mnę. Ja din energia politikju! Sam dikju cxęhzem ja! Ludiś bratis jązikas diń vo, no ońi żubis głódju rokśanąvoi!";

echo "Starting tests on long phrase with special characters: $specialLongPhrase <br /><br />";

$time = new timer(1);
for($i=0;$i<=1000;$i++) {
    $phrase = str_replace($bannedArray, '', $specialLongPhrase);
}
echo "\n" . $phrase . "\n". "<br />";

echo "\nDid Test 1 in (" . $time->get() . " seconds)<br /><br />";


$time = new timer(1);
$phraseAux = $specialLongPhrase;
for($i=0;$i<=1000;$i++) {
    foreach ($bannedArray as $bannedValue) {
        $phraseAux = str_replace($bannedValue, '', $phraseAux);
    }
}
echo $phraseAux . "<br />";

echo "\nDid Test 2 in (" . $time->get() . " seconds)<br /><br />";
