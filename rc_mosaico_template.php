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
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function rc_mosaico_template_civicrm_xmlMenu(&$files)
{
    _rc_mosaico_template_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function rc_mosaico_template_civicrm_install()
{
    _rc_mosaico_template_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function rc_mosaico_template_civicrm_postInstall()
{
    _rc_mosaico_template_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function rc_mosaico_template_civicrm_uninstall()
{
    _rc_mosaico_template_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function rc_mosaico_template_civicrm_enable()
{
    _rc_mosaico_template_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function rc_mosaico_template_civicrm_disable()
{
    _rc_mosaico_template_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function rc_mosaico_template_civicrm_upgrade($op, CRM_Queue_Queue $queue = null)
{
    return _rc_mosaico_template_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function rc_mosaico_template_civicrm_managed(&$entities)
{
    _rc_mosaico_template_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Add CiviCase types provided by this extension.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function rc_mosaico_template_civicrm_caseTypes(&$caseTypes)
{
    _rc_mosaico_template_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Add Angular modules provided by this extension.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function rc_mosaico_template_civicrm_angularModules(&$angularModules)
{
    // Auto-add module files from ./ang/*.ang.php
    _rc_mosaico_template_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function rc_mosaico_template_civicrm_alterSettingsFolders(&$metaDataFolders = null)
{
    _rc_mosaico_template_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function rc_mosaico_template_civicrm_entityTypes(&$entityTypes)
{
    _rc_mosaico_template_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function rc_mosaico_template_civicrm_themes(&$themes)
{
    _rc_mosaico_template_civix_civicrm_themes($themes);
}

/*
 * Custom code
 */

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
    $config['tinymceConfig']['forced_root_block'] ='div';
}
