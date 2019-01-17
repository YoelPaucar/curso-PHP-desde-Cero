<h2> Home Page</h2>
<table class="table">
<thead>
<tr>
<th> Nombre</th>

<th>Nacimiento</th>
</tr>
</thead>
<tbody>
<?php if( count($empleados) > 0) : ?>
<?php foreach ($empleados as $m): ?>
<tr>
<td> 
    <a href="?c=home&a=crud&id=<?php echo $m -> id; ?>">
    <?php echo $m -> nombre; ?> <?php echo $m -> apellido; ?>
    </a>  
</td>
<td> <?php echo $m -> fecha_nacimiento; ?> </td>
</tr>

<?php endforeach; ?>
<?php endif; ?>
</tbody>
</table>