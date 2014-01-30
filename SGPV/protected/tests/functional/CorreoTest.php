<?php

class CorreoTest extends WebTestCase
{
	public $fixtures=array(
		'correos'=>'Correo',
	);

	public function testShow()
	{
		$this->open('?r=correo/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=correo/create');
	}

	public function testUpdate()
	{
		$this->open('?r=correo/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=correo/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=correo/index');
	}

	public function testAdmin()
	{
		$this->open('?r=correo/admin');
	}
}
