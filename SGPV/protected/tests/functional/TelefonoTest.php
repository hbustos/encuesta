<?php

class TelefonoTest extends WebTestCase
{
	public $fixtures=array(
		'telefonos'=>'Telefono',
	);

	public function testShow()
	{
		$this->open('?r=telefono/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=telefono/create');
	}

	public function testUpdate()
	{
		$this->open('?r=telefono/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=telefono/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=telefono/index');
	}

	public function testAdmin()
	{
		$this->open('?r=telefono/admin');
	}
}
