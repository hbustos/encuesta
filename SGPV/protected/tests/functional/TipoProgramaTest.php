<?php

class TipoProgramaTest extends WebTestCase
{
	public $fixtures=array(
		'tipoProgramas'=>'TipoPrograma',
	);

	public function testShow()
	{
		$this->open('?r=tipoPrograma/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tipoPrograma/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tipoPrograma/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tipoPrograma/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tipoPrograma/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tipoPrograma/admin');
	}
}
