<?php

class HistorialAcademicoTest extends WebTestCase
{
	public $fixtures=array(
		'historialAcademicos'=>'HistorialAcademico',
	);

	public function testShow()
	{
		$this->open('?r=historialAcademico/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=historialAcademico/create');
	}

	public function testUpdate()
	{
		$this->open('?r=historialAcademico/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=historialAcademico/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=historialAcademico/index');
	}

	public function testAdmin()
	{
		$this->open('?r=historialAcademico/admin');
	}
}
