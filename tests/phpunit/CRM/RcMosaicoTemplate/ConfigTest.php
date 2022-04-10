<?php

/**
 * This is a generic test class for the extension (implemented with PHPUnit).
 */
class CRM_RcMosaicoTemplate_ConfigTest extends \PHPUnit\Framework\TestCase
{

  /**
   * The setup() method is executed before the test is executed (optional).
   */
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * The tearDown() method is executed after the test was executed (optional)
     * This can be used for cleanup.
     */
    public function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * Check the templates after the hook function.
     */
    public function testTemplates()
    {
        $template = CRM_RcMosaicoTemplate_TemplateConfig::getTemplate();
        self::assertArrayHasKey("name", $template, "The config has to contain the name key.");
        self::assertEquals(CRM_RcMosaicoTemplate_TemplateConfig::TEMPLATE_NAME, $template["name"], "The name has to be the expected value.");
        self::assertArrayHasKey("title", $template, "The config has to contain the title key.");
        self::assertEquals(CRM_RcMosaicoTemplate_TemplateConfig::TEMPLATE_TITLE, $template["title"], "The title has to be the expected value.");
        self::assertArrayHasKey("path", $template, "The config has to contain the path key.");
        self::assertEquals(CRM_RcMosaicoTemplate_TemplateConfig::TEMPLATE_PATH, $template["path"], "The path has to be the expected value.");
        self::assertArrayHasKey("thumbnail", $template, "The config has to contain the thumbnail key.");
        self::assertEquals(CRM_RcMosaicoTemplate_TemplateConfig::TEMPLATE_THUMBNAIL, $template["thumbnail"], "The thumbnail has to be the expected value.");
        self::assertCount(4, $template, "The template has to contain only the name, title, path, thumbnail items.");
    }
}
