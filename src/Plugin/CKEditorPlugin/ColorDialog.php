<?php

/**
 * @file
 * Contains \Drupal\colordialog\Plugin\CKEditorPlugin\ColorDialog.
 */

namespace Drupal\colordialog\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "colordialog" plugin.
 *
 * @CKEditorPlugin(
 *   id = "colordialog",
 *   label = @Translation("Color Dialog"),
 * )
 */
class ColorDialog extends CKEditorPluginBase {
  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return base_path() . 'libraries/colordialog/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [];
  }
}
