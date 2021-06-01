<?php

/*
 * class CRM_Remote_TemplateConfig
 */
class CRM_Remote_TemplateConfig
{
    const TEMPLATE_NAME = 'remote';
    const TEMPLATE_TITLE = 'ReMoTe';
    const TEMPLATE_PATH = 'assets/remote-template.html';
    const TEMPLATE_THUMBNAIL = 'assets/edres/_full.png';
    /*
     * It returns the config of our template.
     * @return array
     */
    public static function getTemplate()
    {
        return [
            'name' => self::TEMPLATE_NAME,
            'title' => self::TEMPLATE_TITLE,
            'path' => self::TEMPLATE_PATH,
            'thumbnail' => self::TEMPLATE_THUMBNAIL,
        ];
    }
}
