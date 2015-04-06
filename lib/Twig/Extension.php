<?php
/*
 * This file is part of the Badcow Lorem Ipsum Generator.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Badcow\LoremIpsum\Twig;

class Extension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('lorem_ipsum', array($this, 'getLoremIpsum')),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'lorem_ipsum';
    }

    /**
     * @param int $count
     * @param string $format
     * @param bool $loremipsum
     * @return array|string
     */
    public function getLoremIpsum($count = 300, $format = 'html', $loremipsum = true)
    {
        $generator = new \Badcow\LoremIpsum\Generator;

        return $generator->getContent($count, $format, $loremipsum);
    }
}