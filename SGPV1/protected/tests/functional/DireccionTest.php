<?php

class DireccionTest extends WebTestCase
{
	public $fixtures=array(
		'direccions'=>'Direccion',
	);

	public function testShow()
	{
		$this->open('?r=direccion/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=direccion/create');
	}

	public function testUpdate()
	{
		$this->open('?r=direccion/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=direccion/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=direccion/index');
	}

	public function testAdmin()
	{
		$this->open('?r=direccion/admin');
	}
}
