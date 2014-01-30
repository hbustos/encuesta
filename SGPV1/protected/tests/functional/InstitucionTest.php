<?php

class InstitucionTest extends WebTestCase
{
	public $fixtures=array(
		'institucions'=>'Institucion',
	);

	public function testShow()
	{
		$this->open('?r=institucion/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=institucion/create');
	}

	public function testUpdate()
	{
		$this->open('?r=institucion/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=institucion/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=institucion/index');
	}

	public function testAdmin()
	{
		$this->open('?r=institucion/admin');
	}
}
