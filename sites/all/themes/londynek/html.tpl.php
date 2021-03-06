<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?>




<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->


<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width">
  <?php endif; ?>
  <meta http-equiv="cleartype" content="on">

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php if ($add_html5_shim and !$add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
    <![endif]-->
  <?php elseif ($add_html5_shim and $add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
    <![endif]-->
  <?php elseif ($add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/respond.js"></script>
    <![endif]-->
  <?php endif; ?>
</head>




<!--<body id="jdPl" class="<?php print $classes; ?>" <?php print $attributes;?>>//-->
<body id="jdPl">



<div id="jdBannersA" style="text-align: center">
<!--/* Revive Adserver Javascript Tag v3.0.3 */-->
<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://rsv.londynek.net/rserver/www/delivery/a-vs-js.php':'http://rsv.londynek.net/rserver/www/delivery/a-vs-js.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=9");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://rsv.londynek.net/rserver/www/delivery/c-vs-k.php?n=a41d0e71&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://rsv.londynek.net/rserver/www/delivery/a-vs-vw.php?zoneid=9&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a41d0e71' border='0' alt='' /></a></noscript>

</div>

<a id="topPage"></a>
<div id="jdPage" class="jdPage"><div class="jdPageContent" id="jdPageContentB">

<header>
  <div class="cL"></div>
  <div class="top">
	<div class="facebook-like-on-top"><fb:like font="arial" width="90" show_faces="false" layout="button_count" href="http://www.facebook.com/update_security_info.php?wizard=1#!/pages/Londyneknet/181639068544472" class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=377037392407080&amp;font=arial&amp;href=http%3A%2F%2Fwww.facebook.com%2Fupdate_security_info.php%3Fwizard%3D1%23!%2Fpages%2FLondyneknet%2F181639068544472&amp;layout=button_count&amp;locale=pl_PL&amp;sdk=joey&amp;show_faces=false&amp;width=90"><span style="vertical-align: bottom; width: 126px; height: 20px;"><iframe width="90px" scrolling="no" height="1000px" frameborder="0" name="f17bfb1593dcbd2" allowtransparency="true" title="fb:like Facebook Social Plugin" style="border: medium none; visibility: visible; width: 126px; height: 20px;" src="http://www.facebook.com/plugins/like.php?app_id=377037392407080&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2Fw9JKbyW340G.js%3Fversion%3D41%23cb%3Dfea15f2da31296%26domain%3Dlondynek.net%26origin%3Dhttp%253A%252F%252Flondynek.net%252Ff33ef827c4ad174%26relation%3Dparent.parent&amp;font=arial&amp;href=http%3A%2F%2Fwww.facebook.com%2Fupdate_security_info.php%3Fwizard%3D1%23!%2Fpages%2FLondyneknet%2F181639068544472&amp;layout=button_count&amp;locale=pl_PL&amp;sdk=joey&amp;show_faces=false&amp;width=90" class=""></iframe></span></fb:like></div>
    <ul class="userInfo">
  
</ul>

<?php
	global $user;
	#var_dump($user);


		if ($user->uid) {
    
?>
		<nav id="options" class="user">
			<ul>
                                <li><a class="big" href="/?q=user" title="<?php print t("Moje Konto"); ?>"><?php print($user->name); ?></a></li>
                                <li><a class="" href="/?q=user/logout" title="<?php print t("Wyloguj"); ?>">Wyloguj</a></li>
                                <li><a class="icH lang pl" href="/en/">English <span><?php print t("Version");?></span></a></li>
                         </ul>
		</nav>
<?php
	}
	if (!$user->uid) {
?>
		 <nav id="options" class="anonymous">
                         <ul>
                                <li><a class="icH login" href="/?q=user/login" title="<?php print t("Zaloguj się na moje konto"); ?>">Zaloguj</a></li>
                                <li><a class="icH register" href="/?q=user/register" title="<?php print t("Nie masz konta? Zarejestruj się!"); ?>">Rejestracja</a></li>
                                <li><a class="icH lang pl" href="/en/">English <span><?php print t("Version"); ?></span></a></li>
                         </ul>
		  </nav>
<?php
		}       
?>

  <div class="ornament"></div>
  </div>
  <div class="content">
    <nav id="menu">
      <ul class="_clr">
    <li>
      <div class="menuList"><span class="lid"></span><a class="" rel="nofollow" href="/biuro/">Biuro</a></div>
      <div class="submenuList">
        <table>
          <tr><td><a rel="nofollow" href="/biuro/FAQ,/biuro/cat?cat_id=12"><span>O nas</span></a></td></tr>
          <tr><td><a rel="nofollow" href="/biuro/biuro/Dane+kontaktowe+czytelnia,/biuro/cat?cat_id=13"><span>Kontakt</span></a></td></tr>
          <tr><td><a rel="nofollow" href="/biuro/Dane+kontaktowe+czytelnia,/biuro/cat?cat_id=15"><span>Reklama</span></a></td></tr>
          <tr><td><a rel="nofollow" href="/biuro/FAQ,/biuro/article?jdnews_id=3173218"><span>FAQ</span></a></td></tr>
        </table>
      </div>
    </li>
    <li>
      <div class="menuList"><span class="lid"></span><a class="" href="/wiadomosci/">Wiadomości</a></div>
      <div class="submenuList">
        <table>
          <tr><td><a href="/wiadomosci/cat?cat_id=40"><span>Wielka Brytania</span></a></td></tr>
          <tr><td><a href="/wiadomosci/cat?cat_id=39"><span>Polska</span></a></td></tr>
          <tr><td><a href="/wiadomosci/cat?cat_id=46"><span>Irlandia</span></a></td></tr>
          <tr><td><a href="/wiadomosci/cat?cat_id=45"><span>Świat</span></a></td></tr>
          <tr><td><a href="/wiadomosci/cat?cat_id=41"><span>Sport</span></a></td></tr>
          <tr><td><div class="hrDotted"></div></td></tr>
          <tr><td><a href="/newslajt/"><span>Londynek Lajt</span></a></td></tr>
          <tr><td><a href="/ukipedia/" class="title"><span>Ukipedia</span><br><span class="subtitle">Polak na Wyspach</span></a></td></tr>
        </table>
      </div>
    </li>
    <li>
      <div class="menuList"><span class="lid"></span><a class="" href="/czytelnia/">Czytelnia</a></div>
      <div class="submenuList">
        <table>
          <tr><td><a href="/czytelnia/"><span>Artykuły</span></a></td></tr>
          <tr><td><a href="/czytelnia/authors"><span>Profile autorów</span></a></td></tr>
        </table>
      </div>
    </li>
<li class="logo">
     <a href="/">londynek.net </a>
</li>   


 <li>
      <div class="menuList"><span class="lid"></span><a class="" href="/ogloszenia/">Ogłoszenia</a></div>
      <div class="submenuList"><span class="lid"></span>
        <table>
          <tr>
            <td><a href="/ogloszenia/index?action=post_new_ad" class="add"><span>Dodaj ogłoszenie</span></a></td>
            <td><a href="/pvt/classifieds" class="cf"><span>Moje ogłoszenia</span></a></td>
          </tr>
          <tr>
            <td colspan="2"><div class="hrDotted"></div></td>
          </tr>
          <tr>
            <td><a href="/accommodation/"><span>Nieruchomości</span></a></td>
            <td><a href="/automotive/"><span>Motoryzacja</span></a></td>
          </tr>
          <tr>
            <td><a href="/jobs/"><span>Pracę oferują</span></a></td>
            <td><a href="/buysell/"><span>Kupię / Sprzedam</span></a></td>
          </tr>
          <tr>
            <td><a href="/jobseekers/"><span>Profile kandydatów</span></a></td>
            <td><a href="/personals/"><span>Towarzyskie</span></a></td>
          </tr>
          <tr>
            <td><a href="/business/"><span>Usługi</span></a></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="2"><div class="hrDotted"></div></td>
          </tr>
          <tr>
            <td><a href="/linkisponsorowane/"><span>Linki Sponsorowane</span></a></td>
            <td><a href="/promocje/"><span>Promocje</span></a></td>
          </tr>
        </table>
      </div>
    </li>
    <li>
      <div class="menuList"><span class="lid"></span><a class="" href="http://forum.londynek.net/">Społeczność</a></div>
      <div class="submenuList pr15">
        <table>
          <tr><td><a href="http://forum.londynek.net/"><span>Forum</span></a></td></tr>
          <tr><td><a href="https://www.facebook.com/Londynek" target="_blank"><span>Facebook</span></a></td></tr>
          <tr><td><a href="https://twitter.com/londynek" target="_blank"><span>Twitter</span></a></td></tr>
        </table>
      </div>
    </li>
    <li>
      <div class="menuList"><span class="lid"></span><a class="" href="/wydarzenia/">Wydarzenia</a></div>
      <div class="submenuList right">
        <table>
          <tr><td><a href="/wydarzenia/"><span>Najbliższe wydarzenia</span></a></td></tr>
          <tr><td><a href="/wydarzenia/index?tab=2"><span>Mapa wydarzeń</span></a></td></tr>
          <tr><td><a href="/competitions/"><span>Konkursy</span></a></td></tr>
        </table>
      </div>
    </li>
</ul>
    </nav>
  </div>
  
  <div class="cR"></div>
</header>


 <?php if ($skip_link_text && $skip_link_anchor): ?>
    <p id="skip-link">
      <a href="#<?php print $skip_link_anchor; ?>" class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
    </p>
  <?php endif; ?>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>




<footer class="n1">
  <nav class="siteMap">
    <ul>
  <li>
    <strong><a href="/biuro/" rel="nofollow">Biuro</a></strong>
    <ul class="list-square-basic blue-square">
      <li><a href="/biuro/cat?cat_id=12" rel="nofollow">O nas</a></li>
      <li><a href="/biuro/cat?cat_id=13" rel="nofollow">Kontakt</a></li>
      <li><a href="/biuro/cat?cat_id=15" rel="nofollow">Reklama</a></li>
      <li><a href="/biuro/cat?cat_id=266" rel="nofollow">FAQ</a></li>
      <li><a href="/biuro/cat?cat_id=14" rel="nofollow">Dla mediów</a></li>
      <li><a href="/biuro/Terms+amp;+Conditions++czytelnia,/biuro/article?jdnews_id=880364" rel="nofollow">Regulamin</a></li>
      <li><a href="/biuro/Privacy+Policy++czytelnia,/biuro/article?jdnews_id=880358" rel="nofollow">Polityka prywatności</a></li>
    </ul>
  </li>
  <li>
    <strong><a href="/wiadomosci/">Wiadomości</a></strong>
    <ul class="list-square-basic blue-square">
      <li><a href="/wiadomosci/cat?cat_id=40">Wielka Brytania</a></li>
      <li><a href="/wiadomosci/cat?cat_id=39">Polska</a></li>
      <li><a href="/wiadomosci/cat?cat_id=46">Irlandia</a></li>
      <li><a href="/wiadomosci/cat?cat_id=45">Świat</a></li>
      <li><a href="/wiadomosci/cat?cat_id=41">Sport</a></li>
      <li><a href="/wiadomosci/cat?cat_id=42">Waluty</a></li>
    </ul>
  </li>
  <li>
    <strong><a href="">Londynek Lajt</a></strong>
    <ul class="list-square-basic blue-square">
      <li><a href="/newslajt/cat?cat_id=213">Dla wszystkich</a></li>
      <li><a href="/newslajt/cat?cat_id=211">Dla kobiet</a></li>
      <li><a href="/newslajt/cat?cat_id=212">Dla mężczyzn</a></li>
    </ul>
  </li>
  <li>
    <strong><a href="">Ukipedia</a></strong>
    <ul class="list-square-basic blue-square">
      <li><a href="/ukipedia/cat?cat_id=116">Praca</a></li>
      <li><a href="/ukipedia/cat?cat_id=115">Mieszkanie</a></li>
      <li><a href="/ukipedia/cat?cat_id=120">Finanse</a></li>
      <li><a href="/ukipedia/cat?cat_id=119">Prawo</a></li>
      <li><a href="/ukipedia/cat?cat_id=118">Zdrowie</a></li>
      <li><a href="/ukipedia/cat?cat_id=131">Edukacja</a></li>
      <li><a href="/ukipedia/files">Dokumenty</a></li>
      <li><a href="/ukipedia/">więcej</a></li>
    </ul>
  </li>
  <li>
    <strong><a href="/czytelnia/">Czytelnia</a></strong>
    <ul class="list-square-basic blue-square">
      <li><a href="/czytelnia/">Artykuły</a></li>
      <li><a href="/czytelnia/authors">Profile autorów</a></li>
    </ul>
  </li>
  <li>
    <strong><a href="http://forum.londynek.net/">Społeczność</a></strong>
    <ul class="list-square-basic blue-square">
      <li><a href="http://forum.londynek.net/">Forum</a></li>
      <li><a target="_blank" href="https://www.facebook.com/Londynek">Facebook</a></li>
    </ul>
  </li>
  <li>
    <strong><a href="/ogloszenia/">Ogłoszenia</a></strong>
    <ul class="list-square-basic blue-square">
      <li><a href="/accommodation/">Nieruchomości</a></li>
      <li><a href="/jobs/">Oferty pracy</a></li>
      <li><a href="/jobseekers/">Profile kandydatów</a></li>
      <li><a href="/business/">Usługi</a></li>
      <li><a href="/automotive/">Motoryzacja</a></li>
      <li><a href="/buysell/">Kupię / Sprzedam</a></li>
      <li><a href="/personals/">Towarzyskie</a></li>
      <li><a href="/linkisponsorowane/">Linki Sponsorowane</a></li>
      <li><a href="/promocje/">Promocje</a></li>
    </ul>
  </li>
  <li>
    <strong><a href="/wydarzenia/">Wydarzenia</a></strong>
    <ul class="list-square-basic blue-square">
      <li><a href="/wydarzenia/">Najbliższe imprezy</a></li>
      <li><a href="/competitions/">Konkursy</a></li>
      
    </ul>
  </li>
</ul>
  </nav>
  <div class="bottom">
    <span class="s1">&copy; 2002&ndash;2014</span><a href="http://londynek.net" class="logo"></a><span class="s2">Wszelkie prawa zastrzeżone</span>
    <span class="s3">127001</span>
  </div>
</footer>


</body>
