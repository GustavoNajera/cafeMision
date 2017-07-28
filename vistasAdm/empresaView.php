<?php
include '../negocios/EmpresaNegocio.php';
$empresaNegocio = new EmpresaNegocio();
$empresa = $empresaNegocio->retornarInformacionEmpresa();
//var_dump($empresa);
//exit;
?>



<div class="row"> 
    <form action="../negocios/actualizarEmpresa.php" method="post" class="form-horizontal">
        <div class="col-md-6">

            <fieldset>
                <!-- Form Name -->
                <legend>Información de la empresa en Español</legend>

                <!-- Textarea -->
                <div class="form-group" style="">
                    <label class="col-md-1 control-label" for="historia">Historia</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="historia" name="historia" rows="6"><?php echo $empresa->historia; ?></textarea>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-1 control-label" for="responsabilidad">Responsabilidad</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="responsabilidad" name="responsabilidad" rows="6"><?php echo $empresa->responsabilidad; ?></textarea>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-1 control-label" for="produccion">Produccion</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="produccion" name="produccion" rows="6"><?php echo $empresa->produccion; ?></textarea>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-1 control-label" for="mision">Misión</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="mision" name="mision" rows="5"><?php echo $empresa->mision; ?></textarea>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-1 control-label" for="vision">Visión</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="vision" name="vision" rows="5"><?php echo $empresa->vision; ?></textarea>
                    </div>
                </div>

            </fieldset>

        </div>

        <div class="col-md-6">

            <fieldset>
                <!-- Form Name -->
                <legend>Información de la empresa en Inglés</legend>

                <!-- Textarea -->
                <div class="form-group" style="">
                    <label class="col-md-1 control-label" for="historia">Historia</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="historia" name="historiain" rows="6"><?php echo $empresa->historiaIn; ?></textarea>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-1 control-label" for="responsabilidad">Responsabilidad</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="responsabilidad" name="responsabilidadin" rows="6"><?php echo $empresa->responsabilidadIn; ?></textarea>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-1 control-label" for="produccion">Produccion</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="produccion" name="produccionin" rows="6"><?php echo $empresa->produccionIn; ?></textarea>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-1 control-label" for="mision">Misión</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="mision" name="misionin" rows="5"><?php echo $empresa->misionIn; ?></textarea>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-1 control-label" for="vision">Visión</label>
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="vision" name="visionin" rows="5"><?php echo $empresa->visionIn; ?></textarea>
                    </div>
                </div>

            </fieldset>

        </div>
        <div class="col-md-12">
            <!-- Button (Double) -->
            <div class="form-group">
                <!--<label class="col-md-4 control-label" for="button1id">Double Button</label>-->
                <div class="col-md-8 col-md-offset-2">
                    <button type="submit" id="button1id" name="button1id" class="btn btn-success btn-lg btn-block">Actualizar</button>
                </div>
            </div>
        </div>

    </form>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">Café Misión</h3>    
            </div>
            <div class="modal-body" style="text-align: center">
                <h4 id="mensaje"></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // A $( document ).ready() block.
    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return false;
    }
    $(document).ready(function () {
        var result = getQueryVariable('resultado');
        if (result === "actualizado") {
            $('#mensaje').html('La información de la empresa fue actualizada con éxito.');
            $('#exampleModal').modal('show');
        } else if (result === "no actualizado") {
            $('#mensaje').html('La información de la empresa no fue actualizada.');
            $('#exampleModal').modal('show');
        }
    });
</script>