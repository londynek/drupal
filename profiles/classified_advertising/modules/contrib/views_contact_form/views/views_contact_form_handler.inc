<?php

class views_contact_form_handler extends views_handler_field_user_mail {

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    $form['link_to_user']['#options']['views_contact_form'] = t('Contact form');
  }

  function render($values) {
    if ($this->options['link_to_user'] == 'views_contact_form') {
      // The view is empty, abort.
      if (empty($this->view->result)) {
        return;
      }

      $emails = array();
      foreach ($this->view->result as $row_index => $row) {
        $emails[] = $this->get_value($row);
      }

      if (empty($emails)) {
        return;
      }

      $data['emails'] = $emails;
      $form = drupal_get_form('views_contact_form_contact_form', $data);

      return drupal_render($form);
    }

    // Fallback to the default behavior.
    $value = $this->get_value($values);
    return $this->render_link($this->sanitize_value($value), $values);
  }

}
