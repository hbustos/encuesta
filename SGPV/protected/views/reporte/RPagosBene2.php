<?php
?>
    <div>
        <table>
            <tr>
                <th>IdPlanilla</th>
                <th>NroDocumento</th>
                <th>Nombre</th>
                <th></th>
            </tr>
            <?php foreach ($Pago as $p)?>
            <tr>
                <td><?php echo $p->IdPlanilla;?></td>
                <td></td>
            </tr>
        </table>
    </div>
<?
?>