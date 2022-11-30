<?=$cabecera?>
<a href= "<?=base_url('crear')?>" class="btn btn-success">Ingresar una nueva almohada<a/>
</br>
</br>
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    <th>Tela</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($almohada as $almohada): ?>
                <tr>
                    <td><?= $almohada['id']; ?></td>
                    <td><?= $almohada['nombre']; ?></td>
                    <td><?= $almohada['tamaño']; ?></td>
                    <td>$<?= $almohada['precio']; ?></td>
                    <td><?= $almohada['tela']; ?></td>
                    <td>
                        <a href="<?=base_url('editar/'.$almohada['id']);?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?=base_url('borrar/'.$almohada['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie?>