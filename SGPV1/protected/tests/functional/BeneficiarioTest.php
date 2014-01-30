<?php

class BeneficiarioTest extends WebTestCase
{
	public $fixtures=array(
		'beneficiarios'=>'Beneficiario',
	);

	public function testShow()
	{
		$this->open('?r=beneficiario/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=beneficiario/create');
	}

	public function testUpdate()
	{
		$this->open('?r=beneficiario/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=beneficiario/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=beneficiario/index');
	}

	public function testAdmin()
	{
		$this->open('?r=beneficiario/admin');
	}
}
