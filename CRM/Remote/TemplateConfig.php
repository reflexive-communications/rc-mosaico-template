<?php

/*
 * class CRM_Remote_TemplateConfig
 */
class CRM_Remote_TemplateConfig {
  /*
   * Extends the templates with the new one
   * Implements hook_civicrm_mosaicoBaseTemplates().
   */
  public static function addTemplate(&$templates) {
    $templates['remote'] = [
      'name' => 'remote',
      'title' => 'ReMoTe',
      'path' => E::url('assets/template-from-scratch.html'),
      'thumbnail' => E::url('assets/edres/_full.png'),
    ];
  }
}
