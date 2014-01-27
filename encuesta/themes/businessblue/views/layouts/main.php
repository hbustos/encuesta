<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="<?php echo Yii::app()->language;?>" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title><?php echo Yii::app()->params['tituloProyecto']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset;?>" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#"><?php echo Yii::app()->params['tituloProyecto']; ?></a></h1>
      <p><?php echo Yii::app()->params['slogan'];?></p>
    </div>
    <div style="text-aling:rigth">
	<?php
		$color=array('style'=>'color:#fff'); 
		echo CHtml::link(Yii::t('app','Spanish'),$this->createUrl('',array('lg','es')),$color).' | '.CHtml::link('English',$this->createUrl('',array('lg','en')),$color);
	?>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
	<?php $this->widget('zii.widgets.CMenu',array(
		'id'=>'topnav',
      		'items'=>array(
            		array('label'=>'Inicio de Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                   	array('label'=>'Bienvenida', 'url'=>array('/site/index'),'visible'=>Yii::app()->user->isGuest),
                    	array('label'=>'Usuarios', 'url'=>array('/usuario/admin'),'visible'=>!Yii::app()->user->isGuest,
				'items'=>array(
					array('label'=>'Administrar', 'url'=>array('/usuario/admin')),
					array('label'=>'Listar', 'url'=>array('/usuario/index')),
					array('label'=>'Crear', 'url'=>array('/usuario/create')),
				),
			),
                     	array('label'=>'Encuesta', 'url'=>array('/site/index'),'visible'=>!Yii::app()->user->isGuest,
				'items'=>array(
					array('label'=>'Inicio', 'url'=>array('/site/index')),
					array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'Contacto', 'url'=>array('/site/contact')),
				),
			),
                      	array('label'=>'Reportes', 'url'=>array('/reporte/index'),'visible'=>!Yii::app()->user->isGuest,
                                'items'=>array(
                                        array('label'=> 'Reporte por Sexo','url'=>array('/reporte/genero')),
                                        array('label'=> 'Reporte por Regionales','url'=>array('/reporte/region')),
                                        array('label'=> 'Reporte por Edad','url'=>array('/reporte/edad')),
                                        array('label'=> 'Reporte General de Beneficiarios','url'=>array('/reporte/RPago')),
                                        array('label'=> 'Reporte Historial Academico','url'=>array('/reporte/RHistoricoEdu')),
                                        array('label'=> 'Reporte de Pagos','url'=>array('/reporte/ReportePagos')),
                                ),
                        ),
                    	//array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
                      	//array('label'=>'Contacto', 'url'=>array('/site/contact')),
                   	array('label'=>'Salida ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        ),
                )); ?>


    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Busqueda en este sitio&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
        <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links'=>$this->breadcrumbs,
                )); ?><!-- breadcrumbs -->
        <?php endif?>

        <div class="info" style='text-aling:left;'>

        <?php
        //         MENSAJES DE ERROR EN FLASH
                $flashMessages = Yii::app()->user->getFlashes();
                if($flashMessages)
                        echo '<ul class="flashes">';
                        foreach($flashMessages as $key => $message){
                                echo '<li><div class="flash-'. $key . '">' . $message . "</div></li>\n";
                        }
                echo '</ul>';
        ?>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container" class="clear">
    	<?php echo $content;?>	 
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <div class="footbox">
      <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Instituciones involucradas: </h2>
      <ul>
        <li><a href="http://www.ascun.org.co">&raquo; Asociación Colombiana de Universidades</a></li>
        <li><a href="http://www.icbf.gov.co">&raquo; Instituto Colombiano de Bienestar Familiar</a></li>
        <li><a href="http://www.sanmartin.edu.co">&raquo; Fundación Universitaria San Martín</a></li>
        <li class="last"><a href="ihttp://www.google.com.co">&raquo;  </a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Información de contacto:</h2>
      <address>
      <?php echo Yii::app()->params['tituloProyecto'];?><br />
      <?php echo Yii::app()->params['direccionProyecto'];?><br />
      <?php echo Yii::app()->params['paisProyecto'];?><br />
      Codigo postal: 0000000<br />
      </address>
      Tel: <?php echo Yii::app()->params['adminTel'];?> 
      <!-- -->
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2013 ASCUN - ICBF - Todos los Derechos Reservados - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by : <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p></br>
    <p class="fl_right">Powered by : <a href="http://www.yiiframework.com" title="Yii Framework">Yii Framework </a></p></br>
    <p class="fl_right">Powered by : <a href="http://www.mysql.com" title="MySQL">MySQL</a></p></br>
    <p class="fl_right">Powered by : <a href="http://www.php.net" title="PHP5">PHP5</a></p></br>
    <br class="clear" />
  </div>
</div>
</body>
</html>
