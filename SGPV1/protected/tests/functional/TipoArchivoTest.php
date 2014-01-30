<?php

class TipoArchivoTest extends WebTestCase
{
	public $fixtures=array(
		'tipoArchivos'=>'TipoArchivo',
	);

	public function testShow()
	{
		$this->open('?r=tipoArchivo/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tipoArchivo/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tipoArchivo/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tipoArchivo/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tipoArchivo/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tipoArchivo/admin');
	}
}
