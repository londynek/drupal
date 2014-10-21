<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  
  <?php if (theme_get_setting('responsive_respond','corporateclean')):
  global $base_path; global $base_root; ?>
  <!--[if lt IE 9]>
  <script src="<?php print $base_root . $base_path . path_to_theme() ?>/js/respond.min.js"></script>
  <![endif]-->
  <?php endif; ?>
  
  <?php print $scripts; ?>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
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
</html>
