<h2 class="page-header">
    <a href="?c=home&a=crud" class="pull-right btn btn-primary">
        Nuevo empleado
    </a>
    Empleados
</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th style="width:100px;">Nacimiento</th>
            
            <th style="width:100px;"></th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($model) > 0): ?>
        <?php foreach($model as $m): ?>
        
        <tr>
            <td>
                <a href="?c=home&a=crud&id=<?php echo $m->id; ?>">
                    <?php echo $m->nombre; ?> <?php echo $m->apellido; ?>
                </a>
            </td>
            <td><?php echo $m->fecha_nacimiento; ?></td>
           
            <td>
                <a href="?c=home&a=eliminar&id=<?php echo $m->id; ?>" class="btn btn-xs btn-danger btn-block">
                    Eliminar
                </a>
            </td>
        </tr>

        <?php endforeach; ?>   
        <?php endif; ?>
    </tbody>
</table>