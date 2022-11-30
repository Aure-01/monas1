<?=$cabecera?>
<style>
    .crear
    {
      color: white;    
      text-align: center;
    }
    .card-title
    {
        color: white;
    }
    .card-body
    {
        color: white;
    }
</style>
    <h1 class="crear">Editar Almohada</h1>
    <div class="card">
    <div class="card-body" style="background-color: black ;" >
        <h5 class="card-title">Ingresar datos de la almohada</h5>
        <p class="card-text">
        <form method="post" action="<?=site_url('/actualizar'.$almohada['id']);?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nombre">Nombre: </label>
        <input id="nombre" value="<?=$almohada['nombre']?>" class="form-control" type="text" name="nombre">
    </div>
    <div class="form-group">
        <label for="tamaño">Tamaño: </label>
        <input id="tamaño" value="<?=$almohada['tamaño']?>" class="form-control" type="text" name="tamaño">
    </div>
    <div class="form-group">
        <label for="precio">Precio: </label>
        <input id="precio" value="<?=$almohada['precio']?>" class="form-control" type="text" name="precio">
    </div>
    <div class="form-group">
        <label for="tela">Tela: </label>
        <input id="tela" value="<?=$almohada['tela']?>" class="form-control" type="text" name="tela">
    </div>
    <button class="btn btn-success" type="submit">Guardar</button>
    <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
</form>
        </p>
    </div>
</div>
<?=$pie?>