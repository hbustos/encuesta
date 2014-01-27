<?php

class respuestasTest extends WebTestCase
{
	public $fixtures=array(
		'respuestases'=>'respuestas',
	);

	public function testShow()
	{
		$this->open('?r=respuestas/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=respuestas/create');
	}

	public function testUpdate()
	{
		$this->open('?r=respuestas/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=respuestas/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=respuestas/index');
	}

	public function testAdmin()
	{
		$this->open('?r=respuestas/admin');
	}
}
