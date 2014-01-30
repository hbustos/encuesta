<?php

class ArchivoTest extends WebTestCase
{
	public $fixtures=array(
		'archivos'=>'Archivo',
	);

	public function testShow()
	{
		$this->open('?r=archivo/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=archivo/create');
	}

	public function testUpdate()
	{
		$this->open('?r=archivo/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=archivo/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=archivo/index');
	}

	public function testAdmin()
	{
		$this->open('?r=archivo/admin');
	}
}
