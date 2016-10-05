<?php

namespace Drupal\as_book\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class BookReservationForm.
 *
 * @package Drupal\as_book\Form
 */
class BookReservationForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'book_reservation_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['book_id'] = [
      '#type' => 'hidden',
    ];
    
    $form['user_id'] = [
      '#type' => 'hidden',
    ];

    $form['submit'] = [
        '#type' => 'submit',
        '#value' => t('Book me !'),
    ];

    return $form;
  }

  /**
    * {@inheritdoc}
    */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
        drupal_set_message($key . ': ' . $value);
    }

  }

}
