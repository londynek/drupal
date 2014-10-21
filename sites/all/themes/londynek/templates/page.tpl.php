<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>


<div class="iTabs cf" id="tabsClassified">

  <div class="tGroup">
    <span class="first">&nbsp;</span><a href="/accommodation/?cftabs=nieruchomosci" class="tab selected panel-opened"><span>Nieruchomości</span></a><a href="/jobs/?cftabs=prace-oferuja" class="tab"><span>Pracę oferują</span></a><a href="/jobseekers/?cftabs=profile-kandydatow" class="tab"><span>Profile kandydatów</span></a><a href="/business/?cftabs=uslugi" class="tab"><span>Usługi</span></a><a href="/automotive/?cftabs=motoryzacja" class="tab"><span>Motoryzacja</span></a><a href="/buysell/?cftabs=kupie-sprzedam" class="tab"><span>Kupię / Sprzedam</span></a><a href="/personals/?cftabs=towarzyskie" class="tab"><span>Towarzyskie</span></a><a href="/promocje/" class="tab"><span>Promocje</span></a><span class="last">&nbsp;</span>
  </div>
  
    <div class="ctGroup jdF cHeight">
      
      <div class="content none" id="nTab0"><div class="loading">Ładuję...</div></div>
      
      <div class="content tabContentVisible" id="nTab1"><div class="c">

  <form method="get" action="/accommodation/view-ads">
  
    <input type="hidden" value="nieruchomosci" name="cftabs">
    <input type="hidden" value="start-page" name="source">
  
    <input type="hidden" value="0" name="_assearch">
    
  <div class="i iA"></div>
  
  <div class="quickOptions">
    <a title="Zobacz swoje ogłoszenia" href="/accommodation/myads/?cftabs=nieruchomosci&amp;cfbtn=my_ads" class="xsBtn2 myCf"></a>
    <a title="Dodaj nowe ogłoszenie" href="/accommodation/new-ad-select?cftabs=nieruchomosci&amp;cfbtn=my_ads" class="xsBtn2 addCf"></a>
  </div>
  
  <div class="search">
  <div class="col"><div class="h">Kategoria:</div>
  <div class="combobox" id="catAContainer"><select style="width:115px;" name="cat" id="catA" class="none">
    <option value="1">Do wynajęcia</option>
    <option value="2">Szukam</option>
    <option value="3">Na sprzedaż</option>
    <option value="4">Kupię</option>
  </select><input type="text" style="width:86px" readonly="readonly" value="Do wynajęcia" class=""><div class="bg none"><div class="container"><div class="arrow"></div><table><tbody><tr><td colspan="0"><ul><li><a style="min-width:86px" href="1"><span>Do wynajęcia</span></a></li></ul></td><td align="right"><span title="Zamknij okno [Escape]" class="btnClose">X</span></td></tr><tr><td><ul><li><a style="min-width:86px" href="2"><span>Szukam</span></a></li><li><a style="min-width:86px" href="3"><span>Na sprzedaż</span></a></li><li><a style="min-width:86px" href="4"><span>Kupię</span></a></li></ul></td></tr></tbody></table></div></div></div>
</div>
  <div class="col"><div class="h">Lokalizacja:</div><div class="combobox" id="viewAContainer"><select style="width:180px;" size="1" name="view" class="view none" id="viewA"><option value="0">-- Dowolna --</option><option data-zoom="10" data-lng="-0.12085" data-lat="51.508742" value="72">Londyn</option><option data-zoom="12" data-lng="-0.142479" data-lat="51.555088" value="73">- Londyn Pn.</option><option data-zoom="12" data-lng="-0.005836" data-lat="51.549324" value="74">- Londyn Wsch.</option><option data-zoom="12" data-lng="-0.018196" data-lat="51.452723" value="75">- Londyn Pd.-Wsch.</option><option data-zoom="12" data-lng="-0.208054" data-lat="51.458285" value="76">- Londyn Pd.-Zach.</option><option data-zoom="12" data-lng="-0.254059" data-lat="51.502118" value="77">- Londyn Zach.</option><option data-zoom="12" data-lng="-0.250626" data-lat="51.566187" value="78">- Londyn Pn.-Zach.</option><option data-zoom="13" data-lng="-0.135534" data-lat="51.5092" value="79">- Londyn Centralny</option><option value=""> -------------------------------</option><option value="">Rejony poza Londynem:</option><option data-zoom="7" data-lng="-3.14208" data-lat="50.97226" value="1">South West England</option><option data-zoom="10" data-lng="-2.592820992" data-lat="51.4537509624" value="2">- Bristol</option><option data-zoom="8" data-lng="-4.87866388" data-lat="50.360094422" value="3">- Cornwall</option><option value="4">- Devon</option><option value="5">- Dorset</option><option value="6">- Gloucestershire</option><option value="7">- Somerset</option><option value="8">- Wiltshire</option><option value="9">- Isles of Scilly</option><option data-zoom="7" data-lng="-0.17376886" data-lat="51.11274852" value="10">South East England</option><option value="11">- Berkshire</option><option value="12">- Buckinghamshire</option><option value="13">- East Sussex</option><option value="14">- Hampshire</option><option value="15">- Isle of Wight</option><option value="16">- Kent</option><option value="17">- Oxfordshire</option><option value="18">- Surrey</option><option value="19">- West Sussex</option><option data-zoom="7" data-lng="0.532837" data-lat="52.214339" value="20">Eastern Region</option><option value="21">- Essex</option><option value="22">- Hertfordshire</option><option value="23">- Bedfordshire</option><option value="24">- Cambridgeshire</option><option value="25">- Norfolk</option><option value="26">- Suffolk</option><option data-zoom="7" data-lng="-0.802002" data-lat="53.061025" value="35">East Midlands</option><option value="36">- Derbyshire</option><option value="37">- Nottinghamshire</option><option value="38">- Lincolnshire</option><option value="39">- Leicestershire</option><option value="40">- Rutland</option><option value="41">- Northamptonshire</option><option data-zoom="7" data-lng="-3.422241" data-lat="52.882391" value="27">West Midlands</option><option value="29">- Herefordshire</option><option value="30">- Shropshire</option><option value="31">- Staffordshire</option><option value="32">- Warwickshire</option><option value="33">- West Midlands</option><option value="34">- Worcestershire</option><option data-zoom="7" data-lng="-3.713379" data-lat="52.48947" value="60">Walia</option><option value="80">- Gwent and Glamorgan</option><option value="81">- Dyfed</option><option value="82">- Powys</option><option value="83">- Gwynedd</option><option value="84">- Clwyd</option><option data-zoom="7" data-lng="-2.389526" data-lat="54.036812" value="48">North West England</option><option value="49">- Cheshire</option><option value="50">- Cumbria</option><option data-zoom="10" data-lng="-2.241945138" data-lat="53.47554288" value="51">- Manchester</option><option value="52">- Lancashire</option><option value="53">- Merseyside</option><option value="85">- Isle of Man</option><option data-zoom="7" data-lng="-1.07666" data-lat="53.952853" value="42">Yorkshire and the Humber</option><option value="43">- South Yorkshire</option><option value="44">- West Yorkshire</option><option value="45">- North Yorkshire</option><option value="46">- East Riding of Yorkshire</option><option value="47">- Lincolnshire</option><option data-zoom="7" data-lng="-1.98852" data-lat="54.71827" value="54">North East England</option><option value="55">- Northumberland</option><option value="56">- Tyne and Wear</option><option value="57">- County Durham</option><option value="58">- North Yorkshire</option><option data-zoom="5" data-lng="-3.691406" data-lat="55.955351" value="59">Szkocja</option><option data-zoom="10" data-lng="-4.252745097" data-lat="55.8463661" value="88">- Glasgow</option><option value="89">- Edynburg</option><option value="90">- Aberdeen</option><option value="91">- Dundee</option><option value="92">- Inne regiony</option><option data-zoom="7" data-lng="-6.59179" data-lat="54.59752" value="61">Irlandia Północna</option><option value="130">- Antrim</option><option value="131">- Armagh</option><option value="132">- Down</option><option value="133">- Fermanagh</option><option value="134">- Londonderry</option><option value="135">- Tyrone</option><option value="136">- Inne regiony</option><option data-zoom="7" data-lng="-7.90814386" data-lat="53.388816" value="128">Irlandia</option><option value="96">- Cork</option><option value="103">- Dublin</option><option value="108">- Galway</option><option value="114">- Limerick</option><option value="124">- Waterford</option><option value="129">- Inne miejsce</option><option data-zoom="5" data-lng="-1.20648371" data-lat="52.37786348" value="86">Inne miejsce w UK</option><option data-zoom="6" data-lng="19.31597722" data-lat="52.05477131" value="87">Polska</option><option data-zoom="4" data-lng="13.339414725" data-lat="46.197609534" value="137">Inne kraje UE</option></select><input type="text" style="width:151px" readonly="readonly" value="Dowolna" class="view"><div class="bg none" style="left: -232px;"><div class="container"><div class="arrow" style="left: 242px;"></div><table><tbody><tr><td colspan="6"><ul><li><a 151="" href="0"><span>Dowolna</span></a></li></ul></td><td align="right"><span title="Zamknij okno [Escape]" class="btnClose">X</span></td></tr><tr><td><ul><li><a 151="" data-zoom="10" data-lng="-0.12085" data-lat="51.508742" href="72"><span><strong>Londyn</strong></span></a></li><li><a 151="" data-zoom="12" data-lng="-0.142479" data-lat="51.555088" href="73"><span>Londyn Pn.</span></a></li><li><a 151="" data-zoom="12" data-lng="-0.005836" data-lat="51.549324" href="74"><span>Londyn Wsch.</span></a></li><li><a 151="" data-zoom="12" data-lng="-0.018196" data-lat="51.452723" href="75"><span>Londyn Pd.-Wsch.</span></a></li><li><a 151="" data-zoom="12" data-lng="-0.208054" data-lat="51.458285" href="76"><span>Londyn Pd.-Zach.</span></a></li><li><a 151="" data-zoom="12" data-lng="-0.254059" data-lat="51.502118" href="77"><span>Londyn Zach.</span></a></li><li><a 151="" data-zoom="12" data-lng="-0.250626" data-lat="51.566187" href="78"><span>Londyn Pn.-Zach.</span></a></li><li><a 151="" data-zoom="13" data-lng="-0.135534" data-lat="51.5092" href="79"><span>Londyn Centralny</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="7" data-lng="-3.14208" data-lat="50.97226" href="1"><span><strong>South West England</strong></span></a></li><li><a 151="" data-zoom="10" data-lng="-2.592820992" data-lat="51.4537509624" href="2"><span>Bristol</span></a></li><li><a 151="" data-zoom="8" data-lng="-4.87866388" data-lat="50.360094422" href="3"><span>Cornwall</span></a></li><li><a 151="" href="4"><span>Devon</span></a></li><li><a 151="" href="5"><span>Dorset</span></a></li><li><a 151="" href="6"><span>Gloucestershire</span></a></li><li><a 151="" href="7"><span>Somerset</span></a></li><li><a 151="" href="8"><span>Wiltshire</span></a></li><li><a 151="" href="9"><span>Isles of Scilly</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="7" data-lng="-3.422241" data-lat="52.882391" href="27"><span><strong>West Midlands</strong></span></a></li><li><a 151="" href="29"><span>Herefordshire</span></a></li><li><a 151="" href="30"><span>Shropshire</span></a></li><li><a 151="" href="31"><span>Staffordshire</span></a></li><li><a 151="" href="32"><span>Warwickshire</span></a></li><li><a 151="" href="33"><span>West Midlands</span></a></li><li><a 151="" href="34"><span>Worcestershire</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="7" data-lng="-2.389526" data-lat="54.036812" href="48"><span><strong>North West England</strong></span></a></li><li><a 151="" href="49"><span>Cheshire</span></a></li><li><a 151="" href="50"><span>Cumbria</span></a></li><li><a 151="" data-zoom="10" data-lng="-2.241945138" data-lat="53.47554288" href="51"><span>Manchester</span></a></li><li><a 151="" href="52"><span>Lancashire</span></a></li><li><a 151="" href="53"><span>Merseyside</span></a></li><li><a 151="" href="85"><span>Isle of Man</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="7" data-lng="-1.07666" data-lat="53.952853" href="42"><span><strong>Yorkshire and the Humber</strong></span></a></li><li><a 151="" href="43"><span>South Yorkshire</span></a></li><li><a 151="" href="44"><span>West Yorkshire</span></a></li><li><a 151="" href="45"><span>North Yorkshire</span></a></li><li><a 151="" href="46"><span>East Riding of Yorkshire</span></a></li><li><a 151="" href="47"><span>Lincolnshire</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="5" data-lng="-3.691406" data-lat="55.955351" href="59"><span><strong>Szkocja</strong></span></a></li><li><a 151="" data-zoom="10" data-lng="-4.252745097" data-lat="55.8463661" href="88"><span>Glasgow</span></a></li><li><a 151="" href="89"><span>Edynburg</span></a></li><li><a 151="" href="90"><span>Aberdeen</span></a></li><li><a 151="" href="91"><span>Dundee</span></a></li><li><a 151="" href="92"><span>Inne regiony</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="7" data-lng="-7.90814386" data-lat="53.388816" href="128"><span><strong>Irlandia</strong></span></a></li><li><a 151="" href="96"><span>Cork</span></a></li><li><a 151="" href="103"><span>Dublin</span></a></li><li><a 151="" href="108"><span>Galway</span></a></li><li><a 151="" href="114"><span>Limerick</span></a></li><li><a 151="" href="124"><span>Waterford</span></a></li><li><a 151="" href="129"><span>Inne miejsce</span></a></li></ul></td></tr><tr><td><ul><li><a 151="" data-zoom="7" data-lng="0.532837" data-lat="52.214339" href="20"><span><strong>Eastern Region</strong></span></a></li><li><a 151="" href="21"><span>Essex</span></a></li><li><a 151="" href="22"><span>Hertfordshire</span></a></li><li><a 151="" href="23"><span>Bedfordshire</span></a></li><li><a 151="" href="24"><span>Cambridgeshire</span></a></li><li><a 151="" href="25"><span>Norfolk</span></a></li><li><a 151="" href="26"><span>Suffolk</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="7" data-lng="-0.17376886" data-lat="51.11274852" href="10"><span><strong>South East England</strong></span></a></li><li><a 151="" href="11"><span>Berkshire</span></a></li><li><a 151="" href="12"><span>Buckinghamshire</span></a></li><li><a 151="" href="13"><span>East Sussex</span></a></li><li><a 151="" href="14"><span>Hampshire</span></a></li><li><a 151="" href="15"><span>Isle of Wight</span></a></li><li><a 151="" href="16"><span>Kent</span></a></li><li><a 151="" href="17"><span>Oxfordshire</span></a></li><li><a 151="" href="18"><span>Surrey</span></a></li><li><a 151="" href="19"><span>West Sussex</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="7" data-lng="-0.802002" data-lat="53.061025" href="35"><span><strong>East Midlands</strong></span></a></li><li><a 151="" href="36"><span>Derbyshire</span></a></li><li><a 151="" href="37"><span>Nottinghamshire</span></a></li><li><a 151="" href="38"><span>Lincolnshire</span></a></li><li><a 151="" href="39"><span>Leicestershire</span></a></li><li><a 151="" href="40"><span>Rutland</span></a></li><li><a 151="" href="41"><span>Northamptonshire</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="7" data-lng="-1.98852" data-lat="54.71827" href="54"><span><strong>North East England</strong></span></a></li><li><a 151="" href="55"><span>Northumberland</span></a></li><li><a 151="" href="56"><span>Tyne and Wear</span></a></li><li><a 151="" href="57"><span>County Durham</span></a></li><li><a 151="" href="58"><span>North Yorkshire</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="7" data-lng="-6.59179" data-lat="54.59752" href="61"><span><strong>Irlandia Północna</strong></span></a></li><li><a 151="" href="130"><span>Antrim</span></a></li><li><a 151="" href="131"><span>Armagh</span></a></li><li><a 151="" href="132"><span>Down</span></a></li><li><a 151="" href="133"><span>Fermanagh</span></a></li><li><a 151="" href="134"><span>Londonderry</span></a></li><li><a 151="" href="135"><span>Tyrone</span></a></li><li><a 151="" href="136"><span>Inne regiony</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="7" data-lng="-3.713379" data-lat="52.48947" href="60"><span><strong>Walia</strong></span></a></li><li><a 151="" href="80"><span>Gwent and Glamorgan</span></a></li><li><a 151="" href="81"><span>Dyfed</span></a></li><li><a 151="" href="82"><span>Powys</span></a></li><li><a 151="" href="83"><span>Gwynedd</span></a></li><li><a 151="" href="84"><span>Clwyd</span></a></li></ul></td><td><ul><li><a 151="" data-zoom="5" data-lng="-1.20648371" data-lat="52.37786348" href="86"><span><strong>Inne miejsce w UK</strong></span></a></li></ul><ul><li><a 151="" data-zoom="6" data-lng="19.31597722" data-lat="52.05477131" href="87"><span><strong>Polska</strong></span></a></li></ul><ul><li><a 151="" data-zoom="4" data-lng="13.339414725" data-lat="46.197609534" href="137"><span><strong>Inne kraje UE</strong></span></a></li></ul></td></tr></tbody></table></div></div></div></div>
  <div class="col"><div class="h">Rodzaj lokalu:</div><div class="combobox" id="typeAContainer"><select style="width:250px;" size="1" name="type" id="typeA" class="none"><option value="0">-- Dowolny --</option><option value="5">Kawalerka (studio)</option><option value="1">Dom/Mieszkanie, 1 sypialnia</option><option value="2">Dom/Mieszkanie, 2 sypialnie</option><option value="3">Dom/Mieszkanie, 3 sypialnie</option><option value="4">Dom/Mieszkanie, 4 sypialnie lub więcej</option><option value="12">Dom/Mieszkanie - na krótko</option><option value="6">Pokój-jedynka</option><option value="7">Pokój-dwójka /jedno podwójne łóżko</option><option value="8">Pokój, 2 łóżka lub więcej</option><option value="9">Miejsce w pokoju</option><option value="11">Pokój/Łóżko - na krótko</option><option value="10">Lokale użytkowe / grunty</option></select><input type="text" style="width:221px" readonly="readonly" value="Dowolny" class=""><div class="bg none"><div class="container"><div class="arrow"></div><table><tbody><tr><td colspan="0"><ul><li><a style="min-width:221px" href="0"><span>Dowolny</span></a></li></ul></td><td align="right"><span title="Zamknij okno [Escape]" class="btnClose">X</span></td></tr><tr><td><ul><li><a style="min-width:221px" href="5"><span>Kawalerka (studio)</span></a></li><li><a style="min-width:221px" href="1"><span>Dom/Mieszkanie, 1 sypialnia</span></a></li><li><a style="min-width:221px" href="2"><span>Dom/Mieszkanie, 2 sypialnie</span></a></li><li><a style="min-width:221px" href="3"><span>Dom/Mieszkanie, 3 sypialnie</span></a></li><li><a style="min-width:221px" href="4"><span>Dom/Mieszkanie, 4 sypialnie lub więcej</span></a></li><li><a style="min-width:221px" href="12"><span>Dom/Mieszkanie - na krótko</span></a></li><li><a style="min-width:221px" href="6"><span>Pokój-jedynka</span></a></li><li><a style="min-width:221px" href="7"><span>Pokój-dwójka /jedno podwójne łóżko</span></a></li><li><a style="min-width:221px" href="8"><span>Pokój, 2 łóżka lub więcej</span></a></li><li><a style="min-width:221px" href="9"><span>Miejsce w pokoju</span></a></li><li><a style="min-width:221px" href="11"><span>Pokój/Łóżko - na krótko</span></a></li><li><a style="min-width:221px" href="10"><span>Lokale użytkowe / grunty</span></a></li></ul></td></tr></tbody></table></div></div></div></div>
  <div class="col"><div class="h">Szukaj w treści ogłoszenia:</div><span class="outerInput"><input type="text" style="width:150px" autocomplete="off" value="" name="str" class="i1"><span class="btnClear" title="Wyczyść tekst [ctrl + d]">X</span></span></div>
  <div class="col"><div class="h">&nbsp;</div>&nbsp;
<input type="submit" value="Szukaj" name="submit" class="lSubmit">
</div>
  </div>
  <div class="clr"></div>

  
  </form>
  <script type="text/javascript">
    $('#viewA').kstCombobox('select',{style:'location',wwwEl:'#jdPageContentB'});
    $('#typeA').kstCombobox('select',{style:'view',column:1});
  </script>

<script type="text/javascript">
    $('.btnClear').kstForm('clearText');
    $('select[id^=cat]').kstCombobox('select',{style:'view',column:1});
    //if( $('.expandSearchHead').length != 0 ) $('.expandSearchHead').kstExpandSearchButton({aSS:0});
    if( $('.eSB em').length != 0 ) $('.eSB em').kstMaster('showHide',{content:'.expandSearch',parent:'.iTabs.cf'});
</script>
<div class="clr"></div>
</div></div>
      
      <div class="content none" id="nTab2"><div class="loading">Ładuję...</div></div>
      
      <div class="content none" id="nTab3"><div class="loading">Ładuję...</div></div>
      
      <div class="content none" id="nTab4"><div class="loading">Ładuję...</div></div>
      
      <div class="content none" id="nTab5"><div class="loading">Ładuję...</div></div>
      
      <div class="content none" id="nTab6"><div class="loading">Ładuję...</div></div>
      
      <div class="content none" id="nTab7"><div class="loading">Ładuję...</div></div>
      
      <div class="content none" id="nTab8"><div class="loading">Ładuję...</div></div>
      
    </div>
    
</div>


<script type="text/javascript">
  var tabsClassified = new S.Tabs("tabsClassified", {defaultTab:1,tabSelectedClass:"selected",tabHoverClass:"tabHover",tabFocusedClass:"tabFocused",panelVisibleClass:"tabContentVisible",enableKeyboardNavigation:false,useLink:false,moreOptions:0,loadContent:1,onPage:"start-page"});
</script>


<div id="page">

  <header class="header" id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
 <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['header']); ?>

  </header>

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
