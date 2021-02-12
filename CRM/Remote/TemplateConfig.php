<?php

/*
 * class CRM_Remote_TemplateConfig
 */
class CRM_Remote_TemplateConfig {
  /*
   * It returns the config of our template.
   * @return array
   */
  public static function getTemplate() {
    return [
      'name' => 'remote',
      'title' => 'ReMoTe',
      'path' => 'assets/template-from-scratch.html',
      'thumbnail' => 'assets/edres/_full.png',
    ];
  }
}
