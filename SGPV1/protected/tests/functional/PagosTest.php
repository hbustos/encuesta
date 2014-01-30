<?php

class PagosTest extends WebTestCase
{
	public $fixtures=array(
		'pagoses'=>'Pagos',
	);

	public function testShow()
	{
		$this->open('?r=pagos/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=pagos/create');
	}

	public function testUpdate()
	{
		$this->open('?r=pagos/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=pagos/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=pagos/index');
	}

	public function testAdmin()
	{
		$this->open('?r=pagos/admin');
	}
}
