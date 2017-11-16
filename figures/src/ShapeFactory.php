<?php
namespace Jpovtify\Figures;

use Exception;
use Jpovtify\Figures\Square;
use Jpovtify\Figures\Triangle;
use Jpovtify\Figures\Circle;

class ShapeFactory
{
	public static function create(string $shape)
	{
		if ($shape == 'Square') {
			return new Square(4);
		} elseif ($shape == 'Triangle') {
			return new Triangle(6, 4);
		} elseif ($shape == 'Circle') {
			return new Circle(5);
		} else {
			throw new Exception("Shape {$shape}: Invalid shape type given. Valids are Square, Triangle & Circle.");
		}	
	}
}

/* End of file */