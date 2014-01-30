<?php

class CuentaTest extends WebTestCase
{
	public $fixtures=array(
		'cuentas'=>'Cuenta',
	);

	public function testShow()
	{
		$this->open('?r=cuenta/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=cuenta/create');
	}

	public function testUpdate()
	{
		$this->open('?r=cuenta/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=cuenta/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=cuenta/index');
	}

	public function testAdmin()
	{
		$this->open('?r=cuenta/admin');
	}
}
