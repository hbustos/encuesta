<?php

class MunicipioTest extends WebTestCase
{
	public $fixtures=array(
		'municipios'=>'Municipio',
	);

	public function testShow()
	{
		$this->open('?r=municipio/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=municipio/create');
	}

	public function testUpdate()
	{
		$this->open('?r=municipio/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=municipio/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=municipio/index');
	}

	public function testAdmin()
	{
		$this->open('?r=municipio/admin');
	}
}
