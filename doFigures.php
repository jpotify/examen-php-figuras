<?php

require 'figures/vendor/autoload.php';

use Jpovtify\Figures\ShapeFactory;
use Jpovtify\Figures\Square;
use Jpovtify\Figures\Triangle;
use Jpovtify\Figures\Circle;

try {

    $figure = ShapeFactory::create('Triangle'); // base, height
    echo "The current figure is a {$figure->type()}\n";
    echo "The base of the triangle is {$figure->base()} units wide\n";
    echo "The triangle is {$figure->height()} units height\n";
    echo "The surface of the triangle is {$figure->surface()} units\n\n";

    $figure = ShapeFactory::create('Circle'); // radius
    echo "This figure is a {$figure->type()}\n";
    echo "The circle has a diameter of {$figure->diameter()} units\n";
    echo "The surface of the circle is {$figure->surface()} units\n\n";

    $figure = ShapeFactory::create('Square'); // side
    echo "The figure is a {$figure->type()}\n";
    echo "The square has a surface of {$figure->surface()} units\n";
    echo "The square has sides of {$figure->height()} units\n\n";

    $figure = ShapeFactory::create('Ellipsis', 4, 7);
    echo "The figure is a {$figure->type()}";

} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

/* End of file */