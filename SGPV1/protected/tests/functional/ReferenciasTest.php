<?php

class ReferenciasTest extends WebTestCase
{
	public $fixtures=array(
		'referenciases'=>'Referencias',
	);

	public function testShow()
	{
		$this->open('?r=referencias/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=referencias/create');
	}

	public function testUpdate()
	{
		$this->open('?r=referencias/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=referencias/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=referencias/index');
	}

	public function testAdmin()
	{
		$this->open('?r=referencias/admin');
	}
}
