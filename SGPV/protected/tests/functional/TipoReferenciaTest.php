<?php

class TipoReferenciaTest extends WebTestCase
{
	public $fixtures=array(
		'tipoReferencias'=>'TipoReferencia',
	);

	public function testShow()
	{
		$this->open('?r=tipoReferencia/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tipoReferencia/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tipoReferencia/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tipoReferencia/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tipoReferencia/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tipoReferencia/admin');
	}
}
