<?php

class PaisTest extends WebTestCase
{
	public $fixtures=array(
		'paises'=>'Pais',
	);

	public function testShow()
	{
		$this->open('?r=pais/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=pais/create');
	}

	public function testUpdate()
	{
		$this->open('?r=pais/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=pais/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=pais/index');
	}

	public function testAdmin()
	{
		$this->open('?r=pais/admin');
	}
}
