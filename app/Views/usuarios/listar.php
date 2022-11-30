<?= $cabecera ?>
<a href="<?= base_url('/usuarios/crear') ?>" class="btn btn-success">Ingresar un nuevo usuario<a />
    </br>
    </br>
    <table class="table table-dark">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nombre completo</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuario as $usuario) : ?>
                <tr>
                    <td><?= $usuario->id; ?></td>
                    <td><?= $usuario->nombre_completo; ?></td>
                    <td><?= $usuario->user; ?></td>
                    <td>
                        <a href="<?= base_url('/usuarios/editar/' . $usuario->id); ?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?= base_url('/usuarios/borrar/' . $usuario->id); ?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pie ?>