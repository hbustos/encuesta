<?php

class ReferenciaTest extends WebTestCase
{
	public $fixtures=array(
		'referencias'=>'Referencia',
	);

	public function testShow()
	{
		$this->open('?r=referencia/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=referencia/create');
	}

	public function testUpdate()
	{
		$this->open('?r=referencia/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=referencia/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=referencia/index');
	}

	public function testAdmin()
	{
		$this->open('?r=referencia/admin');
	}
}
