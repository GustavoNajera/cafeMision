<?php
include '../negocios/ProcesoProduccionNegocio.php';
$procesoProduccion = new ProcesoProduccionNegocio();
$etapas = $procesoProduccion->retornarEtapasProceso();
//foreach ($etapas as $value) {
//    echo $value->id;
//    
//}
//var_dump($etapas);
//exit;
?>
<div class="container">
    <div id="products" class="row list-group">
        <?php
        foreach ($etapas as $value) {
            ?>     
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            <?php echo $value->nombre ?> </h4>
                        <p class="group inner list-group-item-text">
                            <?php echo $value->descripcion ?>
                        </p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="#">ACTUALIZAR</a>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <form>
                                    <a class="btn btn-success" href="#">ELIMINAR</a>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
</div>
<!--
<div class="row"> 
    <div class="col-md-6">
        <form action="../negocios/actualizarEmpresa.php" method="post" class="form-horizontal">
            <fieldset>
                 Form Name 
                <legend>Información de la empresa en Español</legend>
                 Textarea 
                <div class="form-group" style="">
                    <label class="col-md-1 control-label" for="nombre">Nombre</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="nombre" name="nombre" rows="6" required>ffff</textarea>
                    </div>
                </div>
                 Textarea 
                <div class="form-group">
                    <label class="col-md-1 control-label" for="responsabilidad">Descripción</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="6" required>descripcion</textarea>
                    </div>
                </div>
                 Textarea 
                <div class="form-group">
                    <label class="col-md-1 control-label" for="produccion">Nombre Inglés</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="nombrein" name="nombrein" rows="6" required>fffff</textarea>
                    </div>
                </div>
                 Textarea 
                <div class="form-group">
                    <label class="col-md-1 control-label" for="mision">Descripción Inglés</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="descripcionin" name="descripcionin" rows="5" required>ffff</textarea>
                    </div>
                </div>
            </fieldset>
            <div class="col-md-12">
                 Button (Double) 
                <div class="form-group">
                    <label class="col-md-4 control-label" for="button1id">Double Button</label>
                    <div class="col-md-8 col-md-offset-2">
                        <button type="submit" id="button1id" name="button1id" class="btn btn-success btn-lg btn-block">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <form action="../negocios/actualizarEmpresa.php" method="post" class="form-horizontal">
            <fieldset>
                 Form Name 
                <legend>Información de la empresa en Español</legend>
                 Textarea 
                <div class="form-group" style="">
                    <label class="col-md-1 control-label" for="nombre">Nombre</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="nombre" name="nombre" rows="6" required>ffff</textarea>
                    </div>
                </div>
                 Textarea 
                <div class="form-group">
                    <label class="col-md-1 control-label" for="responsabilidad">Descripción</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="6" required>descripcion</textarea>
                    </div>
                </div>
                 Textarea 
                <div class="form-group">
                    <label class="col-md-1 control-label" for="produccion">Nombre Inglés</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="nombrein" name="nombrein" rows="6" required>fffff</textarea>
                    </div>
                </div>
                 Textarea 
                <div class="form-group">
                    <label class="col-md-1 control-label" for="mision">Descripción Inglés</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="descripcionin" name="descripcionin" rows="5" required>ffff</textarea>
                    </div>
                </div>
            </fieldset>
            <div class="col-md-12">
                 Button (Double) 
                <div class="form-group">
                    <label class="col-md-4 control-label" for="button1id">Double Button</label>
                    <div class="col-md-8 col-md-offset-2">
                        <button type="submit" id="button1id" name="button1id" class="btn btn-success btn-lg btn-block">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>-->
