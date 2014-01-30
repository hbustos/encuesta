<?php

class PagoTest extends WebTestCase
{
	public $fixtures=array(
		'pagos'=>'Pago',
	);

	public function testShow()
	{
		$this->open('?r=pago/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=pago/create');
	}

	public function testUpdate()
	{
		$this->open('?r=pago/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=pago/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=pago/index');
	}

	public function testAdmin()
	{
		$this->open('?r=pago/admin');
	}
}
