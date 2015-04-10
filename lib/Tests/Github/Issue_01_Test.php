<?php
/*
 * This file is part of badcow-loremipsum.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Badcow\LoremIpsum\Tests\Github;

use Badcow\LoremIpsum\Generator;

/**
 * Sometimes getParagraphs(1) returns array('')
 * Reported by: arvidj
 * @link https://github.com/Badcow/LoremIpsum/issues/1
 */
class Issue_01_Test extends \PHPUnit_Framework_TestCase
{
    public function testGetSingleParagraph()
    {
        srand(1428581280);
        $gen = new Generator;
        for ($i = 0; $i < 1000; $i++) {
            $para = $gen->getParagraphs(1);
            $this->assertTrue($para[0] !== '', "Failed on iteration #$i");
        }
    }

    public function testGetSingleParagraph_noSrand()
    {
        $gen = new Generator;
        for ($i = 0; $i < 1000; $i++) {
            $para = $gen->getParagraphs(1);
            $this->assertTrue($para[0] !== '', "Failed on iteration #$i");
        }
    }
}