<?php
$cachetime = 14400;
$cachepath = '/var/www/user1/data/www/fmp3.ru/cache/';
$play = "Слушать";
$download = "Скачать";
$duration = "Продолжительность";
$genre = "Жанр";
$downloadAltTitleBefore = "Скачать mp3 "; //  50-80 знаков (обычно — 75)
$downloadAltTitleAfter = "";
$pageTitleBefore = "";
$pageTitleAfter = " mp3 скачать или слушать онлайн музыку на ".$_SERVER['SERVER_NAME'];
$keywords = array('песни', 'mp3', 'слушать', 'скачать', 'загрузить', 'бесплатно', 'поиск', 'композиция', 'исполнитель', 'альбом', 'быстро', 'музыка', 'файлы', 'музыкальный', 'аудио', 'треки', 'минуса', 'вконтакте', 'новинки', 'аудиокниги', 'качество', 'свежие', 'бесплатно', 'хорошие', 'сборник', 'формат'); //до 250 (250 — максимум, ориентируйтесь на ударные первые 150 знаков).
$descriptionBefore = "Поиск бесплатной mp3 музыки из вконтакте по запросу "; //около 150-200
$descriptionAfter = ". Наиболее полная база mp3 файлов доступна для вас без регистрации. Уникальный сервис, позволяет находить сбоники, аудиокниги, треки и другие аудиоданные.";
$zeroresult = "Найдено 0 результатов.";
$pagenavih1 = "Треки на букву ";
$text1 = "Пожалуйста, введите название трэка или имя исполнителя, группы";
$h1hometag = "Free Mp3";
$contenthometag = "Услуги поисковой системы <b>".$_SERVER['SERVER_NAME']."</b> полностью бесплатные. Вы можете прослушивать или скачивать понравившиеся композиции без регистрации. Пользуясь услугами данного сервиса, вы принимаете наши условия использования.";
$genreshometxt = "Жанры";
$hometitle = "Free Mp3 - бесплатный сервис поиска mp3 файлов";
$homekeywords = "mp3, музыка, аудиокниги, аудио, слушать, песни";
$homedescription = "Поисковая система по mp3 файлам. Возможность слушать и скачивать бесплатно.";
$headertext = " на сайте <span style='text-transform: uppercase'>".$_SERVER['SERVER_NAME']."</span>";
$georegion = "RU";
$geoplacename = "Нижний Новгород";
$geoposition = "56.296504;43.936059";
$geoicbm = "56.296504, 43.936059";
$organizationname = "Поисковик mp3 файлов, аудиокниг, рингтонов, композиций, альбомов";
$organizationlocation = "Расположение:";
$streetaddress = "ул. Трамвайная 4";
$addresslocality = "Нижний Новгород";
$addressregion = "Нижний Новгород";
$phone = "Телефон:";
$phonenumber = "(831) 223-45-15 ";
$sitename = $_SERVER['SERVER_NAME'];
$socialnetworks = '<div class="share42init"></div><script type="text/javascript" src="http://fmp3.ru/share42/share42.js"></script>';
$lastqueriestext = "Последние запросы: ";
/*ping*/
$psitename = "Free Mp3 поиск музыки на ".$_SERVER['SERVER_NAME'];
$psiteurl = "http://".$_SERVER['SERVER_NAME'];
$ppageurl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$pfeedurl = "";
/*ping*/
$home = "Главная";
$songsbygenre = "Песни по стилям и жанрам";
$hits100 = "100 хитов";
$hits100h1 = "100 хитов по версии сайта ".$_SERVER['SERVER_NAME'];
$songsbygenretitle = "Музыка по жанрам (скачать, прослушать) на сайте ".$_SERVER['SERVER_NAME'];
$firstlettertitle = "Музыка на букву ".$_GET['letter']." на сайте ".$_SERVER['SERVER_NAME'].". Страница "; if(is_numeric($_GET['page'])){$firstlettertitle.=$_GET['page'];}else{$firstlettertitle.="1";}
$hits100title = "100 музыкальных хитов по версии сайта ".$_SERVER['SERVER_NAME'];
$firstletterkeywords = "музыка, на букву, бесплатная музыка по алфавиту, поиск музыки по алфавиту, мр3 музыка по алфавиту";
$firstletterdescription = "Музыка на букву ".$_GET['letter'].". Русская и иностранная музыка по алфавиту, доступна для бесплатного прослушивания и скачивания.";
$hits100description = "Наилучшие 100 песен, исполнителей, треков по версии сайта ".$_SERVER['SERVER_NAME'];
$hits100keywords = "музыка, хит, mp3, лучшие, хиты 2015, 2016, новинки, слушать хиты";
$radio = "Радио";
$radioh1 = "Бесплатное радио";
$radiotitle = "Бесплатное радио на сайте ".$_SERVER['SERVER_NAME'];
$radiokeywords = "радио, бесплатно, слушать, прямой эфир, раздача, качество, фм";
$radiodescription = "Бесплатное радио в хорошем качестве. Прямая трансляция онлайн эфиров.";
$urlliststotal = 1000;
$rsstitle = "FMP3.RU RSSFeed";
$rsslink = "http://".$_SERVER['SERVER_NAME'];
$rssdescription = "FMP3.RU - поисковая система mp3 файлов. Поиск музыки, трэков.";
$rsstotal = 1000;
$rssauthor = "fmp3.ru";
$rsslang = "ru-RU";
$rssgenerator = "fmp3.ru 1.0";
$rsscopyright = "Copyright 2015 fmp3.ru";
$rssmanagingeditor = "managingeditor@gmail.com (Frank Luksa)";
$rsswebmaster = "webmaster@gmail.com (Frank Luksa)";
$rssoneitemafter = " (бесплатная музыка mp3, радио)";
$rssoneitemafterdescription = " слушать музыку, скачать музыку без регистрации, музыка вк, скачать песни бесплатно, музыка онлайн";
$titlesymbol = "► ";
$comments = "<div id=\"hypercomments_widget\"></div>
<script type=\"text/javascript\">
_hcwp = window._hcwp || [];
_hcwp.push({widget:\"Stream\", widget_id: 60471});
(function() {
if(\"HC_LOAD_INIT\" in window)return;
HC_LOAD_INIT = true;
var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || \"en\").substr(0, 2).toLowerCase();
var hcc = document.createElement(\"script\"); hcc.type = \"text/javascript\"; hcc.async = true;
hcc.src = (\"https:\" == document.location.protocol ? \"https\" : \"http\")+\"://w.hypercomments.com/widget/hc/60471/\"+lang+\"/widget.js\";
var s = document.getElementsByTagName(\"script\")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>
<a href=\"http://hypercomments.com\" class=\"hc-link\" title=\"comments widget\">comments powered by HyperComments</a>";
?>