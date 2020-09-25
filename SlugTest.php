<?php

use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase
{
	public function test_render()
	{
		require "Slug.php";

		$slug = new Slug("Curso de Laravel");

		$expected = "curso-de-laravel";

		$this->assertEquals($slug->render(), $expected);
	}
}

?>