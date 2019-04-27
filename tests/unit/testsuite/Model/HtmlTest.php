<?php

use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
  public function testHtml()
  {
    $model = new RyaanAnthony_ContentBuilder_Model_Html;

    $results = $model->getHtml();

    $this->assertStringContainsString('Example HTML', $results);
  }
}
