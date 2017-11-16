<?php
namespace Jpovtify\Figures;

use Jpovtify\Figures\Shape;

class Circle implements Shape
{
	private $radius = 0;
	private $shape = "circle";

	public function __construct(float $radius)
	{
		$this->radius = $radius;
	}

	public function surface()
	{
		return M_PI * $this->radius * $this->radius;
	}

	public function base()
	{
		return null;
	}

	public function height()
	{
		return null;
	}

	public function diameter()
	{
		return $this->radius + $this->radius;
	}

	public function type()
	{
		return $this->shape;
	}
}

/* End of file */