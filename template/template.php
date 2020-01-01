<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="ru">

<head>
  <title>[TITLESYMBOL][TITLE]</title>
  <meta name="keywords" content="[KEYWORDS]">
  <meta name="description" content="[DESCRIPTION]">
  <meta charset="utf-8">

  <script src="http://[SITENAME]/js/ajax.js?[UNIQUE]"></script>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" />

<style>

#ContainerDiv {
  margin: auto;
  position: fixed;
  margin: auto;
  left: 0;
  bottom: 0;
  width: 100%;
}

#InnerContainer {
  width: 100%;
}



#main{

}

body{
  font-family: Helvetica,Arial,sans-serif;
  font-size: 16px;
  color: #333;
line-height: 1.6em;
}
a, a:visited, a:hover, a:active {
    color: #0095DD;
}
a{
  text-decoration: underline;
font-weight: normal;
}
*{
  max-width: 100%;
height: auto;
}
#main input{
  font-size: 32px;
}

</style>
<style>

#songlist td{
  border-bottom: #BDBDBD 1px solid;
}
.downloadlink, .playlink{
  cursor: pointer;
}
.songartist a{
  text-decoration: none;
  color: #333;
  font-size: 14px;
}
.songartist:hover{
  color: #0095DD;
}

.songartist a:hover, a:active{
  text-decoration: none;
  color: #0095DD;
}
.songdurationgenre{
   font-size: 14px;
   color: #808080;
}
p{
  margin: 0px;
}
.playdownload{
  vertical-align: top;
}
.playdownload a{

}
.songtitle{
  font-weight: bold;
}
.songartist span{
  cursor: pointer;
}
.homegenre{
  float: left;
  margin: 2px;
  border: #DCD9D3 1px solid;
  width: 100px;
  height: 120px;
}
.homegenre img{
  width: 70px;
  height: 70px;
}
#header{
font-size: 20px;
font-weight: bold;
}
#topmenu div{
  padding: 3px;
  border: #DCD9D3 1px solid;
  float: left;
  margin-right: 3px;
}
.coloredgenres{
  text-decoration: none;
}
#radiotable td{
border-right: #DCD9D3 1px solid;
}
.titleradio{
  font-weight: bold;
  border-bottom: #DCD9D3 1px solid;
}
#radiotable tr.lineradio:hover{
  background-color: #CFCBC4;
  cursor: pointer;
}
.radiodescription{
  font-size: 10px;
  text-overflow: ellipsis;
overflow: hidden;
width:200px;
height: 20px;
margin: 0px;
}
.lastquery:hover{
background-color: #E8E8E8;
border: #9C9C9C 1px solid;
}
.lastquery{
border: #FFF 1px solid;
}
#h1tag{
  text-transform: capitalize;
}
input[type="text"] {
   text-transform: capitalize;
}

</style>

<script>
//player
function updateSource(songnum){
//var playertracknamecont = document.getElementById('playertrackname');
//playertracknamecont.innerHTML = document.getElementById('song'+songnum).getAttribute('data-track');

var audio = document.getElementById('audio-player');
audio.src=document.getElementById('song'+songnum).getAttribute('data-value');
audio.load();
audio.play();

var clickedlink = document.getElementById('p'+songnum);
clickedlink.style.color = '#212121';

var allplaylinks = document.getElementsByClassName('playlink');
for(var i = 0; i< allplaylinks.length; i++){
  if(allplaylinks[i].id == 'p'+songnum)continue;
  allplaylinks[i].style.color = '#0095DD';
}

}

// radio
function playradio(source, id){
  var audio = document.getElementById('audio-player');
audio.src=source;
//audio.load();
audio.play();

var selectedtr = document.getElementById(id);
selectedtr.style.backgroundColor = '#0095DD';

var alltrlinks = document.getElementsByClassName('lineradio');
for(var i = 0; i< alltrlinks.length; i++){
  if(alltrlinks[i].id == id)continue;
  alltrlinks[i].style.backgroundColor = '#FFFFFF';
}

}
</script>
<meta name="geo.region" content="[GEOREGION]" />
<meta name="geo.placename" content="[GEOPLACENAME]" />
<meta name="geo.position" content="[GEOPOSITION]" />
<meta name="ICBM" content="[GEOICBM]" />
<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />


<!-- player -->



<!-- /player -->
</head>

<body>
<table id="main" align="center" width="100%">
<tr>
    <td id="header">[HEADER]&nbsp;<a href="http://[SITENAME]/rss.php"><img src="images/rss_icon.png" alt="" /></a></td>
</tr>
<tr>
    <td id="topmenu">
        <div><a href="http://[SITENAME]">[HOME]</a></div> <div><a href="http://[SITENAME]/songsbygenre">[SONGSBYGENRE]</a></div> <div><a href="http://[SITENAME]/hits100">[HITS100]</a></div> <div><a href="http://[SITENAME]/radio">[RADIO]</a></div>
    </td>
</tr>
<tr>
    <td>[TEXT1]<br />
        <input type="text" id="musicmp3" name="musicmp3" value="[CURRENTSEARCH]">
        <input id="searchButton" name="searchButton" type="button" value="Поиск" onclick="startSearch(0);">
    </td>
</tr>
<tr>
    <td id="firstletter">
        <a href='http://[SITENAME]/index.php?action=firstletter&letter=а'>А</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=б'>Б</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=в'>В</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=г'>Г</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=д'>Д</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=е'>Е</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=ж'>Ж</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=з'>З</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=и'>И</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=й'>Й</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=к'>К</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=л'>Л</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=м'>М</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=н'>Н</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=о'>О</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=п'>П</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=р'>Р</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=с'>С</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=т'>Т</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=у'>У</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=ф'>Ф</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=х'>Х</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=ц'>Ц</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=ч'>Ч</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=ш'>Ш</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=э'>Э</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=ю'>Ю</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=я'>Я</a><br />
        <a href='http://[SITENAME]/index.php?action=firstletter&letter=0'>0</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=1'>1</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=2'>2</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=3'>3</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=4'>4</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=5'>5</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=6'>6</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=7'>7</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=8'>8</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=9'>9</a><br />
        <a href='http://[SITENAME]/index.php?action=firstletter&letter=a'>A</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=b'>B</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=c'>C</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=d'>D</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=e'>E</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=f'>F</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=g'>G</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=h'>H</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=i'>I</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=j'>J</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=k'>K</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=l'>L</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=m'>M</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=n'>N</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=o'>O</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=p'>P</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=q'>Q</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=r'>R</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=s'>S</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=t'>T</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=u'>U</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=v'>V</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=w'>W</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=x'>X</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=y'>Y</a> <a href='http://[SITENAME]/index.php?action=firstletter&letter=z'>Z</a>
    </td>
</tr>
<tr>
    <td >
        <div id="resultSearchMusic"></div>
            <h1 id='h1tag'>[H1TAG]</h1>
            [SOCIALNETWORKS]<br />
            [CONTENT]
    </td>
</tr>
<tr>
    <td>
    [COMMENTS]
    </td>
</tr>
<tr>
    <td>
    [LASTQUERIESTEXT][LASTQUERIES]
    </td>
</tr>
<tr>
    <td>
        <div itemscope itemtype="http://schema.org/Organization">
   <span itemprop="name">[ORGANIZATIONNAME]</span><br />
   [ORGANIZATIONLOCATION]
   <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <span itemprop="streetAddress">[STREETADDRESS]</span>,
      <span itemprop="addressLocality">[ADDRESSLOCALITY]</span>,
      <span itemprop="addressRegion">[ADDRESSREGION]</span>.
   </div>
  <img itemprop="logo" src="http://[SITENAME]/images/mp3.png" /><br />
   [PHONE] <span itemprop="telephone">[PHONENUMBER]</span><br />
   <a href="http://[SITENAME]" itemprop="url">http://[SITENAME]</a>
   <a href="http://[SITENAME]/rss.php"><img src="images/rss_icon.png" alt="" /></a>
</div>
    </td>
</tr>

</table>
<div id="ContainerDiv">
    <div id="InnerContainer">
        <div id="TheBelowDiv">
        <audio controls="controls" id="audio-player" style="width:100%;background-color: #607D8B;"></audio>


        <p id="playertrackname">&nbsp;</p>



        </div>
    </div>
</div>

</body>

</html>