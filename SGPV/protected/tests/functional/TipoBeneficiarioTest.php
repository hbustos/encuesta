<?php

class TipoBeneficiarioTest extends WebTestCase
{
	public $fixtures=array(
		'tipoBeneficiarios'=>'TipoBeneficiario',
	);

	public function testShow()
	{
		$this->open('?r=tipoBeneficiario/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tipoBeneficiario/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tipoBeneficiario/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tipoBeneficiario/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tipoBeneficiario/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tipoBeneficiario/admin');
	}
}
