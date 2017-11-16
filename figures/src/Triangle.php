<?php
namespace Jpovtify\Figures;

use Jpovtify\Figures\Shape;

class Triangle implements Shape
{
	private $base = 0;
	private $height = 0;
	private $shape = 'triangle';

	public function __construct(float $base, float $height)
	{
		$this->base = $base;
		$this->height = $height;
	}

	public function surface()
	{
		return ($this->base * $this->height) * 0.5;
	}

	public function base()
	{
		return $this->base;
	}

	public function height()
	{
		return $this->height;
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