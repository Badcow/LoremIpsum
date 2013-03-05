Lorem Ipsum Generator
=====================

Library for generating lorem ipsum text. More to come very soon!

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