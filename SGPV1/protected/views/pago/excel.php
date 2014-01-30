<?php if($model!==null){?>
<table border="1">
<tr>
	<th>Id</th>
	<th>Regional</th>
	<th>Beneficiario</th>
	<th>DocumentoBeneficiario</th>
</tr>
<?php $x=0;foreach($model as $pagos){ ?>
<tr <?php echo ($x++)%2==0?"style='background-color:#CCC'":"";?>>
	<td> <?php echo $pagos->Id;?></td>
	<td> <?php echo $pagos->Regional;?></td>
	<td> <?php echo $pagos->Beneficiario;?></td>
	<td> <?php echo $pagos->DocumentoBeneficiario;?></td>
</tr>
<?php } ?>	
</table>
<?php } ?>	
