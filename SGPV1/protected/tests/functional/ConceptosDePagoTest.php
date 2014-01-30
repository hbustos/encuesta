<?php

class ConceptosDePagoTest extends WebTestCase
{
	public $fixtures=array(
		'conceptosDePagos'=>'ConceptosDePago',
	);

	public function testShow()
	{
		$this->open('?r=conceptosDePago/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=conceptosDePago/create');
	}

	public function testUpdate()
	{
		$this->open('?r=conceptosDePago/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=conceptosDePago/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=conceptosDePago/index');
	}

	public function testAdmin()
	{
		$this->open('?r=conceptosDePago/admin');
	}
}
