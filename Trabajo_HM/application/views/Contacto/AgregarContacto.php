<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">

                    <h1>Contacto </h2>
                </div>
            </div>
        <div class="row">
    <div class="container">
            <div class="col-sm-2">
            
            </div>
            <div class="col-sm-6">

    <br>
    
        <legend>Agregar Telefono a<br> <?=$datos[0]->nombres ?> <?=$datos[0]->apellido_paterno ?> <?=$datos[0]->apellido_materno ?> </legend>
        
        <form class="form-horizontal" method="post" action="<?=base_url()?>index.php/contacto/AgregarTelefono">
            <fieldset>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Teléfono</label>
                    <div class="col-lg-10">
                        <input type="hidden" class="form-control" name="nombre" value="<?=$datos[0]->nombres ?> <?=$datos[0]->apellido_paterno ?> <?=$datos[0]->apellido_materno ?>">
                        <input type="hidden" class="form-control" name="Rut" value="<?=$datos[0]->rut?>">
                        <input type="hidden" class="form-control" name="Tipo" value="<?=$datos[0]->Parte?>">
                        <input type="text" class="form-control" name="Tel1" value="" placeholder="+56911111111">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancelar</button>
                        <input type="submit" class="btn btn-primary" value="Agregar" name="">
                        <a href="<?=base_url()?>index.php/contacto" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </fieldset>
        </form>
            </div>
            <div class="col-sm-4">
                
            </div>
        </div>
    </div>
</div>