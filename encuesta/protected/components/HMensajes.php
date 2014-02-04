<?php
class HMensajes
{
	static function getNecesitoTraduccion($event)
	{
		$text="";
		$text.= " lenguaje: ($event->language) <br>";
		$text.= " categoria: ($event->category) <br>";
		$text.= " Mensaje: ($event->message) <br>";

		mail('hfb5@hotmail.com','Necesidad de traduccion SGPV',$text);
	}
}	

?>
