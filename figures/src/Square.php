<?php
namespace Jpovtify\Figures;

use Jpovtify\Figures\Shape;

class Square implements Shape
{
	private $side = 0;
	private $shape = 'square';

	public function __construct(float $side)
	{
		$this->side = $side;
	}

	public function surface()
	{
		return $this->side * $this->side;
	}

	public function base()
	{
		return $this->side;
	}

	public function height()
	{
		return $this->side;
	}

	public function diameter()
	{
		return null;
	}

	public function type()
	{
		return $this->shape;
	}
}

/* End of file */