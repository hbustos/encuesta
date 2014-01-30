<?php

class RegionalTest extends WebTestCase
{
	public $fixtures=array(
		'regionals'=>'Regional',
	);

	public function testShow()
	{
		$this->open('?r=regional/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=regional/create');
	}

	public function testUpdate()
	{
		$this->open('?r=regional/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=regional/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=regional/index');
	}

	public function testAdmin()
	{
		$this->open('?r=regional/admin');
	}
}
