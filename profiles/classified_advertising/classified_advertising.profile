<?php
/**
 * @file
 * Enables modules and site configuration for a standard site installation.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Allows the profile to alter the site configuration form.
 */
function system_form_install_configure_form_alter(&$form, $form_state) {
  // Pre-populate the site name with the server name.
  $form['site_information']['site_name']['#default_value'] = 'Classified Advertising';
  $form['admin_account']['field_first_name'] = array(
    '#type' => 'textfield',
    '#title' => 'First name',
    '#weight' => -12,
	'#required' => true,
  );
  $form['admin_account']['field_last_name'] = array(
    '#type' => 'textfield',
    '#title' => 'Last name',
    '#weight' => -11,
	'#required' => true,
  );
  $form['admin_account']['field_email'] = array(
    '#type' => 'textfield',
    '#title' => 'Contact email',
    '#weight' => 2,
	'#required' => true,
  );

  $form['#submit'][] = 'classified_advertising_admin_save_fullname';
}
/**
 * Implements hook_form_alter().
 */
function system_form_install_select_profile_form_alter(&$form, $form_state) {
  // select openfolio install profile by default
  foreach ($form['profile'] as $key => $element) {
    $form['profile'][$key]['#value'] = 'Classified Advertising';
  }
}
/**
 * Save the full name of the first user.
 */
function classified_advertising_admin_save_fullname($form_id, &$form_state) {
  $values = $form_state['values'];
  $account = user_load(1);
  $account->field_first_name[LANGUAGE_NONE][0]['value'] = $values['field_first_name'];
  $account->field_last_name[LANGUAGE_NONE][0]['value'] = $values['field_last_name'];
  $account->field_email[LANGUAGE_NONE][0]['email'] = $values['field_email'];
  user_save($account);
  realname_update($account);
}
