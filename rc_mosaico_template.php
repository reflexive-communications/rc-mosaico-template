<?php

require_once 'rc_mosaico_template.civix.php';

// phpcs:disable
use CRM_RcMosaicoTemplate_ExtensionUtil as E;

// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function rc_mosaico_template_civicrm_config(&$config)
{
    _rc_mosaico_template_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_mosaicoBaseTemplates().
 */
function rc_mosaico_template_civicrm_mosaicoBaseTemplates(&$templates)
{
    $newTemplate = CRM_RcMosaicoTemplate_TemplateConfig::getTemplate();
    $newTemplate['path'] = E::url($newTemplate['path']);
    $newTemplate['thumbnail'] = E::url($newTemplate['thumbnail']);
    $templates[$newTemplate['name']] = $newTemplate;
}

/**
 * Implements hook_civicrm_mosaicoConfig().
 */
function rc_mosaico_template_civicrm_mosaicoConfig(&$config)
{
    $config['tinymceConfig']['forced_root_block'] = 'div';
}
