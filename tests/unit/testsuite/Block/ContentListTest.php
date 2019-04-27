<?php

use PHPUnit\Framework\TestCase;

class ContentListTest extends TestCase
{
  public function testContentList()
  {
    $contentList = new Example_Feature_Block_ContentList;

    $results = $contentList->getContentList();

    $this->assertSame(1, count($results));
  }
}
