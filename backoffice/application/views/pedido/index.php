
<?php //var_dump($model); ?>

<h1 class="page-header">
    Pedidos
</h1>

<ol class="breadcrumb">
  <li class="active">Pedidos Facu</li>
</ol>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Pedido</th>
            <th style="width:300px;">Empleado</th>
            <th style="width:140px;">Estado</th>
            <th style="width:140px;">Total</th>
            <th style="width:100px;"></th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($model as $m): ?>
        <tr>
            <td>#<?php echo $m->id; ?></td>
            <td> <?php echo $m->Empleado; ?></td>
            <td><?php echo  $m->Estado; ?></td>
            <td class="text-right"><?php echo  $m->Total; ?></td>
            <td class="text-center">
                <a class="btn btn-xs btn-block btn-success" href="<?php echo site_url('pedido/ver/'. $m->id); ?>">
                    Ver detalle
                </a>
            </td>
        </tr>
         <?php endforeach; ?>
    </tbody>
</table>

<?php echo $this->pagination->create_links(); ?>