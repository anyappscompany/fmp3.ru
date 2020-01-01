
<?php
include_once('strings.php');
// подключиться к базе и получить адрес кеша
  //http://muz.tt/search.php?musicmp3=kk
  $translitkw = str_replace("/", "", strtolower($_SERVER['REQUEST_URI']));
  $translitkw = str_replace(".html", "", $translitkw);

  $result = mysql_query("SELECT kw, translitkw, cache, lastupdate FROM songs WHERE translitkw='".$translitkw."'");
  $foundSongs = mysql_fetch_assoc($result);

  if (mysql_num_rows($result)<1||!file_exists ("cache/".$foundSongs['cache'])){     // в базе нет записи - файл не существует
    $pageTemplate = str_replace("[CONTENT]", $zeroresult, $pageTemplate);
    $pageTemplate = str_replace("[H1TAG]", $zeroresult, $pageTemplate);
  $pageTemplate = str_replace("[CURRENTSEARCH]", $zeroresult, $pageTemplate);
  $pageTemplate = str_replace("[CONTENT]", $zeroresult, $pageTemplate);
  $pageTemplate = str_replace("[TITLE]", $zeroresult, $pageTemplate);
  $pageTemplate = str_replace("[COMMENTS]", "", $pageTemplate);
  $pageTemplate = str_replace("[KEYWORDS]", $zeroresult, $pageTemplate);
  $pageTemplate = str_replace("[DESCRIPTION]", $zeroresult, $pageTemplate);
    }else{

  $pageTemplate = str_replace("[H1TAG]", $foundSongs['kw'], $pageTemplate);
  $pageTemplate = str_replace("[CURRENTSEARCH]", $foundSongs['kw'], $pageTemplate);
  $pageTemplate = str_replace("[TITLE]", $pageTitleBefore.mb_convert_case($foundSongs['kw'],MB_CASE_TITLE,'UTF-8').$pageTitleAfter, $pageTemplate);

  // формирование ключевых слов с перемешкой
  array_push($keywords, $foundSongs['kw']);
  shuffle($keywords);
  $keywordString  = "";
  for($i=0;$i<count($keywords);$i++){
    if($i>0){$keywordString.=", ".$keywords[$i];}else
    {$keywordString.=$keywords[$i];}
    }
  $pageTemplate = str_replace("[KEYWORDS]", $keywordString, $pageTemplate);

  // описание
  $pageTemplate = str_replace("[DESCRIPTION]", $descriptionBefore.$foundSongs['kw'].$descriptionAfter, $pageTemplate);
  $pageTemplate = str_replace("[COMMENTS]", $comments, $pageTemplate);








  /*АТОООБНОВЛЕНИЕ КЕША ПРИ ЗАГРУЗКЕ СТРАНИЦЫ РОБОТАМИ*/
  /*ОТКЛЮЧИТЬ ПРИ БОЛЬШОЙ ПОСЕЙЩАЕМОСТ*/
  /*if (file_exists("cache/".$foundSongs['cache']) && (time()> (filemtime("cache/".$foundSongs['cache'])+$cachetime))) {
    $pageTemplate = str_replace("</body>", "<script>startSearch(0);</script></body>", $pageTemplate);
    }*/

    //http://fmp3.ru/search.php?musicmp3=%D0%AD%D1%81%D1%82%D0%BE%D0%BD%D1%81%D0%BA%D0%B8%D0%B5%20%D0%BD%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B5%20%D0%BF%D0%B5%D1%81%D0%BD%D0%B8


  $cachedVkJson = @file_get_contents("cache/".$foundSongs['cache']);

  $vkContentArray = json_decode($cachedVkJson , true);
  $url = $vkContentArray["response"][1]["url"];
  $Headers = @get_headers($url);
  if($Headers[18] === 'HTTP/1.1 200 OK') {
//echo "Файл существует";
} else {
//echo "Файл не найден";
$pageTemplate = str_replace("</body>", "<script>startSearch(0);</script></body>", $pageTemplate);
// ДОЛБИТ САБ - АХУЕННО http://fmp3.ru/dolbit-sab-axuenno.html ПУСТОЙ
}


  if($cachedVkJson){
  $vkContentArray = json_decode($cachedVkJson , true);
  $songList .= "<table width='100%' id='songlist' border='0'><tr><td>Треков найдено: ".$vkContentArray['response'][0]."<br /></td></tr>";
  for($i=1;$i<sizeof($vkContentArray['response']);$i++){
    $songList .= "<tr class='row'><td class='oneitem' itemscope itemtype='http://schema.org/AudioObject'><span id='song".$i."' data-track='".$vkContentArray['response'][$i]['artist']." - ".$vkContentArray['response'][$i]['title']."' data-value='".$vkContentArray["response"][$i]["url"]."'><a id='p".$i."' alt='".$play." ".$vkContentArray['response'][$i]['title']."' title='".$play." ".$vkContentArray['response'][$i]['title']."' class='playlink' onclick='updateSource(".$i.")' >".$play."</a></span>&nbsp;&nbsp;&nbsp;&nbsp;<span><a itemprop='contentUrl' class='downloadlink' alt='".$downloadAltTitleBefore.$vkContentArray['response'][$i]['title'].$downloadAltTitleAfter."' title='".$downloadAltTitleBefore.$downloadAltTitleAfter.$vkContentArray['response'][$i]['title']."' download='".$vkContentArray["response"][$i]["url"]."' href='".$vkContentArray["response"][$i]["url"]."'>".$download."</a></span>";
    //$songList .= "<span style='display:inline;' id='song".$i."' data-value='".$vkContentArray["response"][$i]["url"]."'><img width='30px;' src='http://fc00.deviantart.net/fs71/f/2011/253/9/c/play_glossy_button_by_stevanppp-d49fn3f.png' onclick='updateSource(".$i.")'></img></span>";
    //$songList .= "<span style='display:inline;' class='songtitle ellipsis'><img width='30px;' src='http://iconizer.net/files/Bunch_of_Bluish_Icons/orig/download.png' onclick='downloadSong(".$i.")'></img></span>";
    $songList .= "<p class='songtitle size' itemprop='name'>".$vkContentArray['response'][$i]['title']."</p>";
    $songList .= "<meta itemprop='encodingFormat' content='mp3' /><time itemprop='dateModified' datetime='".$foundSongs['lastupdate']."'></time>";
    //$songList .= "<meta itemprop='contentUrl' content='".$vkContentArray["response"][$i]["url"]."' />";
    //$songList .= "<meta itemprop='contentUrl' content='https://www.youtube.com/watch?v=h6s8tSorMA8' />";
    $songList .= "<span class='description'>";
    $songList .= "<p class='songartist size'><span onclick='startSearch(this.innerHTML);'>".$vkContentArray['response'][$i]['artist']."</span></p>";
    $songList .= "<meta itemprop='duration' content='".$vkContentArray['response'][$i]['duration']."' />";
    $songList .= "<p class='songdurationgenre size' itemprop='description'>".$duration.": ".round((($vkContentArray['response'][$i]['duration'])/60),3)."";
    $songList .= " ".$genre.": ".$genres[$vkContentArray['response'][$i]['genre']]."</p></span>";
    $songList .= '<div style="display: none;" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
 <meta itemprop="bestRating" content="5" />
 <meta itemprop="ratingValue" content="'.(4.5+rand(0,5)/10).'" />
 <meta itemprop="ratingCount" content="'.rand(10,200).'" />
 </div>';
    $songList .= "</td></tr>";                                   }

  $pageTemplate = str_replace("[CONTENT]", $songList, $pageTemplate);
  }else{
    $pageTemplate = str_replace("[CONTENT]", $zeroresult, $pageTemplate);
  }
  $songList .= "</table>";

  }

?>