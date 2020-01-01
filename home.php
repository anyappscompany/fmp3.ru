<?php
$pageTemplate = str_replace("[CURRENTSEARCH]", "", $pageTemplate);
$pageTemplate = str_replace("[H1TAG]", $h1hometag, $pageTemplate);

$pageTemplate = str_replace("[TITLE]", $hometitle, $pageTemplate);
$pageTemplate = str_replace("[KEYWORDS]", $homekeywords, $pageTemplate);
$pageTemplate = str_replace("[DESCRIPTION]", $homedescription, $pageTemplate);
$pageTemplate = str_replace("[COMMENTS]", "", $pageTemplate);

$genreshome .= "<h2>".$genreshometxt."</h2>";
$genreshomehtml = "
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/rok.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop.jpg' alt='Rock' title='Rock' /><br />Rock</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/pop.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop2.jpg' alt='Pop' title='Pop' /><br />Pop</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/rep-xip-xop.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop3.jpg' alt='Rap & Hip-Hop' title='Rap & Hip-Hop' /><br />Rap & Hip-Hop</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/rasslablyayushhaya-muzyka.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop4.jpg' alt='Easy Listening' title='Easy Listening' /><br />Easy Listening</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/tancevalnaya-muzyka.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop5.jpg' alt='Dance & House' title='Dance & House' /><br />Dance & House</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/instrumentalnaya-muzyka.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop6.jpg' alt='Instrumental' title='Instrumental' /><br />Instrumental</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/metal.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop7.jpg' alt='Metal' title='Metal' /><br />Metal</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/alternativnaya-muzyka.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop8.jpg' alt='Alternative' title='Alternative' /><br />Alternative</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/dabstep.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop9.jpg' alt='Dubstep' title='Dubstep' /><br />Dubstep</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/dzhaz-blyuz.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop10.jpg' alt='Jazz & Blues' title='Jazz & Blues' /><br />Jazz & Blues</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/dram-n-bejs.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop11.jpg' alt='Drum & Bass' title='Drum & Bass' /><br />Drum & Bass</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/trans.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop12.jpg' alt='Trance' title='Trance' /><br />Trance</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/shanson.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop13.jpg' alt='Chanson' title='Chanson' /><br />Chanson</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/etnicheskaya-muzyka.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop14.jpg' alt='Ethnic' title='Ethnic' /><br />Ethnic</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/akustika-vokal.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop15.jpg' alt='Acoustic & Vocal' title='Acoustic & Vocal' /><br />Acoustic & Vocal</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/reggi.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop16.jpg' alt='Reggae' title='Reggae' /><br />Reggae</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/klassicheskaya-muzyka.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop17.jpg' alt='Classical' title='Classical' /><br />Classical</a></div>
<div class='homegenre'><a href='http://".$_SERVER['SERVER_NAME']."/indi-pop.html'><img src='http://".$_SERVER['SERVER_NAME']."/images/W70_H70_Otop18.jpg' alt='Indie Pop' title='Indie Pop' /><br />Indie Pop</a></div>
";
$pageTemplate = str_replace("[CONTENT]", $contenthometag.$genreshome.$genreshomehtml, $pageTemplate);
?>