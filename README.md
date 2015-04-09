Lorem Ipsum Generator
=====================

Library for generating lorem ipsum text. Bonus Twig extension! This has been changed around a bit from the original [geecu/LoremIpsum](https://github.com/geecu/LoremIpsum).

## Build Status
[![Build Status](https://travis-ci.org/Badcow/LoremIpsum.png)](https://travis-ci.org/Badcow/LoremIpsum)

## Basic Usage

    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs(5);
    echo implode('<p>', $paragraphs);

## Installation

### Using composer

    //composer.json
    
    "require": {
        "badcow/lorem-ipsum": "dev-master"
    }