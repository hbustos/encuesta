<?php

class BancoTest extends WebTestCase
{
	public $fixtures=array(
		'bancos'=>'Banco',
	);

	public function testShow()
	{
		$this->open('?r=banco/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=banco/create');
	}

	public function testUpdate()
	{
		$this->open('?r=banco/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=banco/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=banco/index');
	}

	public function testAdmin()
	{
		$this->open('?r=banco/admin');
	}
}
