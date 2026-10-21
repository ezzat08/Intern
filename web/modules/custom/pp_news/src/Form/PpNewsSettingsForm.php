<?php

namespace Drupal\pp_news\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class PpNewsSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames(): array {
    return ['pp_news.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'pp_news_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $config = $this->config('pp_news.settings');

    $form['related_news_limit'] = [
      '#type' => 'number',
      '#title' => $this->t('Number of related news articles'),
      '#default_value' => $config->get('related_news_limit') ?? 3,
      '#min' => 1,
      '#max' => 10,
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $this->config('pp_news.settings')
      ->set('related_news_limit', (int) $form_state->getValue('related_news_limit'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}