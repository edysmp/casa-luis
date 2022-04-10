<?php

declare(strict_types=1);

namespace Drupal\app;

use Drupal\Core\Form\FormStateInterface;

final class FormOperations {

  public static function nodeFormAlter(&$form, FormStateInterface $form_state, $form_id) {
    $form['test-text']['#markup'] = '<p>Casa Luis &#8482;</p>';
  }
}

