<?php
/**
 * @file
 * classified_advertising_ad_search.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function classified_advertising_ad_search_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'job_search_block';
  $context->description = 'Provides the fulltext and region search block for ad';
  $context->tag = 'ad_search';
  $context->conditions = array(
    'sitewide' => array(
      'values' => array(
        1 => 1,
      ),
    ),
    'views' => array(
      'values' => array(
        'ad_search' => 'ad_search',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views--exp-ad_search-search_page' => array(
          'module' => 'views',
          'delta' => '-exp-ad_search-search_page',
          'region' => 'sidebar_first',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Provides the fulltext and region search block for ad');
  t('ad_search');
  $export['job_search_block'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'job_search_facets';
  $context->description = 'Display search api facets in ad search';
  $context->tag = 'ad_search';
  $context->conditions = array(
    'views' => array(
      'values' => array(
        'ad_search' => 'ad_search',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'facetapi-Y0DWl6V2UjKQJO8dbuyprWF4eOX1H3AJ' => array(
          'module' => 'facetapi',
          'delta' => 'Y0DWl6V2UjKQJO8dbuyprWF4eOX1H3AJ',
          'region' => 'sidebar_first',
          'weight' => '-10',
        ),
        'facetapi-jZW1zIkaQq1tf4lB1MTlz2TG36AKelQk' => array(
          'module' => 'facetapi',
          'delta' => 'jZW1zIkaQq1tf4lB1MTlz2TG36AKelQk',
          'region' => 'sidebar_first',
          'weight' => '-9',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Display search api facets in ad search');
  t('ad_search');
  $export['job_search_facets'] = $context;

  return $export;
}
