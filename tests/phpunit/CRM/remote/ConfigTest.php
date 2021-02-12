<?php

/**
 * This is a generic test class for the extension (implemented with PHPUnit).
 */
class CRM_Remote_ConfigTest extends \PHPUnit\Framework\TestCase {

  /**
   * The setup() method is executed before the test is executed (optional).
   */
  public function setUp(): void {
    parent::setUp();
  }

  /**
   * The tearDown() method is executed after the test was executed (optional)
   * This can be used for cleanup.
   */
  public function tearDown(): void {
    parent::tearDown();
  }

  /**
   * Simple example test case.
   *
   * Note how the function name begins with the word "test".
   */
  public function testExample() {
    self::assertTrue(TRUE, "The argument must be true to pass the test");
  }

  /**
   * Check the templates after the hook function.
   */
  public function testTemplates() {
    $template = CRM_Remote_TemplateConfig::getTemplate();
    self::assertEquals(4, count($template), "The template has to contain the name, title, path, thumbnail items.");
    self::assertTrue(array_key_exists("name", $template), "The config has to contain the name key.");
    $expectedName = "remote";
    self::assertEquals($expectedName, $template["name"], "The name has to be the expected value.");
    self::assertTrue(array_key_exists("title", $template), "The config has to contain the title key.");
    $expectedTitle = "ReMoTe";
    self::assertEquals($expectedTitle, $template["title"], "The title has to be the expected value.");
    self::assertTrue(array_key_exists("path", $template), "The config has to contain the path key.");
    $expectedPath = "assets/template-from-scratch.html";
    self::assertEquals($expectedPath, $template["path"], "The path has to be the expected value.");
    self::assertTrue(array_key_exists("thumbnail", $template), "The config has to contain the thumbnail key.");
    $expectedThumbnail = "assets/edres/_full.png";
    self::assertEquals($expectedThumbnail, $template["thumbnail"], "The thumbnail has to be the expected value.");
  }
}
