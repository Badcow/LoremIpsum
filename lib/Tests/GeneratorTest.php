<?php
/*
 * This file is part of badcow-loremipsum.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Badcow\LoremIpsum\Tests;

use Badcow\LoremIpsum\Generator;

class GeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testGetRandomWords()
    {
        $gen = new Generator;
        $this->assertCount(1,   $gen->getRandomWords(1));
        $this->assertCount(8,   $gen->getRandomWords(8));
        $this->assertCount(16,  $gen->getRandomWords(16));
        $this->assertCount(64,  $gen->getRandomWords(64));
        $this->assertCount(128, $gen->getRandomWords(128));
        $this->assertCount(512, $gen->getRandomWords(512));
    }

    public function testGetSentences()
    {
        $gen = new Generator;
        $this->assertCount(1,   $gen->getSentences(1));
        $this->assertCount(8,   $gen->getSentences(8));
        $this->assertCount(16,  $gen->getSentences(16));
        $this->assertCount(64,  $gen->getSentences(64));
        $this->assertCount(128, $gen->getSentences(128));
        $this->assertCount(512, $gen->getSentences(512));
    }

    public function testGetParagraphs()
    {
        $gen = new Generator;
        $this->assertCount(1,   $gen->getParagraphs(1));
        $this->assertCount(8,   $gen->getParagraphs(8));
        $this->assertCount(16,  $gen->getParagraphs(16));
        $this->assertCount(64,  $gen->getParagraphs(64));
        $this->assertCount(128, $gen->getParagraphs(128));
        $this->assertCount(512, $gen->getParagraphs(512));
    }

    public function testToSentence()
    {
        $gen = new Generator;
        $sentences = $gen->getSentences(64);

        foreach ($sentences as $sentence) {
            /** @var string $sentence */
            $this->assertRegExp(
                    '/^[A-Z][a-z, ]+\.$/',
                    $sentence,
                    sprintf('Failed to assert "%s" was a valid sentence.', $sentence)
            );
        }
    }
}