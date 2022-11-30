<?= $cabecera ?>
<style>
    .crear {
        color: white;
        text-align: center;
    }

    .card-title {
        color: white;
    }

    .card-body {
        color: white;
    }
</style>
<h1 class="crear">Editar Usuario</h1>
<div class="card">
    <div class="card-body" style="background-color: black ;">
        <h5 class="card-title">Ingresar datos del usuario</h5>
        <p class="card-text">
        <form method="post" action="<?= site_url('/usuarios/actualizar' . $usuario->id); ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre completo: </label>
                <input id="nombre" value="<?= $usuario->nombre_completo ?>" class="form-control" type="text" name="nombre_completo">
            </div>
            <div class="form-group">
                <label for="tamaño">Usuario: </label>
                <input id="tamaño" value="<?= $usuario->user ?>" class="form-control" type="text" name="user">
            </div>
            <div class="form-group">
                <label for="precio">Contraseña: </label>
                <input id="precio" value="<?= $usuario->password ?>" class="form-control" type="password" name="password">
            </div>
            <button class="btn btn-success" type="submit">Guardar</button>
            <a href="<?= base_url('/usuarios/listar'); ?>" class="btn btn-info">Cancelar</a>
        </form>
        </p>
    </div>
</div>
<?= $pie ?>