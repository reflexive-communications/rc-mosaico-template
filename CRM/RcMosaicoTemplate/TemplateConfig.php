<?php

/**
 * class CRM_RcMosaicoTemplate_TemplateConfig
 */
class CRM_RcMosaicoTemplate_TemplateConfig
{
    const TEMPLATE_NAME = 'rc-base';

    const TEMPLATE_TITLE = 'RC Base Template';

    const TEMPLATE_PATH = 'assets/rc-base-template.html';

    const TEMPLATE_THUMBNAIL = 'assets/edres/_full.png';

    /**
     * It returns the config of our template.
     *
     * @return array
     */
    public static function getTemplate(): array
    {
        return [
            'name' => self::TEMPLATE_NAME,
            'title' => self::TEMPLATE_TITLE,
            'path' => self::TEMPLATE_PATH,
            'thumbnail' => self::TEMPLATE_THUMBNAIL,
        ];
    }
}
