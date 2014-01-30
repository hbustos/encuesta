<?php

class ProgramaTest extends WebTestCase
{
	public $fixtures=array(
		'programas'=>'Programa',
	);

	public function testShow()
	{
		$this->open('?r=programa/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=programa/create');
	}

	public function testUpdate()
	{
		$this->open('?r=programa/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=programa/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=programa/index');
	}

	public function testAdmin()
	{
		$this->open('?r=programa/admin');
	}
}
