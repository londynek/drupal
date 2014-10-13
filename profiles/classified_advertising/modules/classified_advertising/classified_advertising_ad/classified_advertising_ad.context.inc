<?php
/**
 * @file
 * classified_advertising_ad.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function classified_advertising_ad_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'ad_view_page_blocks';
  $context->description = 'Ad view page blocks';
  $context->tag = 'ad_view';
  $context->conditions = array(
    'node' => array(
      'values' => array(
        'classified' => 'classified',
      ),
      'options' => array(
        'node_form' => '1',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-ad_contact_info-block' => array(
          'module' => 'views',
          'delta' => 'ad_contact_info-block',
          'region' => 'sidebar_first',
          'weight' => '1',
        ),
        'views-ad_contact_email-block' => array(
          'module' => 'views',
          'delta' => 'ad_contact_email-block',
          'region' => 'sidebar_first',
          'weight' => '2',
        ),
      ),
    ),
  );
  $context->condition_mode = 1;

  // Translatables
  // Included for use with string extractors like potx.
  t('Ad view page blocks');
  t('ad_view');
  $export['ad_view_page_blocks'] = $context;

  return $export;
}
