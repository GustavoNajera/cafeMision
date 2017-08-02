<?php
//include '../negocios/EmpresaNegocio.php';
//$empresaNegocio = new EmpresaNegocio();
//$empresa = $empresaNegocio->retornarInformacionEmpresa();
?>
<div class="row"> 
    <div class="col-md-6 col-md-offset-3">
        <form action="../negocios/ingresarProcesoProduccion.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <fieldset>
                <!-- Form Name -->
                <legend>INGRESAR NUEVO PROCESO DE PRODUCCIÓN</legend>
                <!-- Textarea -->
                <div class="form-group" >
                    <div class="col-md-12">                     
                        <input class="form-control" id="nombre" name="nombre" placeholder="Digite el nombre de la etapa" required>
                    </div>
                </div>
                <!-- Textarea -->
                <div class="form-group">
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5"  placeholder="Digite la descripción de la etapa" required></textarea>
                    </div>
                </div>
                <!-- Textarea -->
                <div class="form-group">
                    <div class="col-md-12">                     
                        <input class="form-control" id="nombrein" name="nombrein" placeholder="Digite el nombre de la etapa en inglés" required>
                    </div>
                </div>
                <!-- Textarea -->
                <div class="form-group">
                    <div class="col-md-12">                     
                        <textarea class="form-control" id="descripcionin" name="descripcionin" rows="5" placeholder="Digite la descripción de la etapa en inglés" ></textarea>
                    </div>
                </div>


                <!--Textarea--> 
                <div class="form-group" >
                    <label class="col-md-7 control-label" for="responsabilidad">Seleccione imagen 1</label>
                    <div class="col-md-12">                     
                        <input type='file' class="form-control" id="imagen1" name="imagen1" placeholder="Digite el nombre de la etapa" accept="image/x-png,image/jpeg" required >
                    </div>
                </div>
                <!--Textarea--> 
                <div class="form-group">
                    <label class="col-md-7 control-label" for="responsabilidad">Seleccione imagen 2</label>
                    <div class="col-md-12">                     
                        <input type='file' class="form-control" id="imagen2" name="imagen2" placeholder="Digite el nombre de la etapa" accept="image/x-png,image/jpeg" required>
                    </div>
                </div>
                <!--Textarea--> 
                <div class="form-group" >
                    <label class="col-md-7 control-label" for="responsabilidad">Seleccione imagen 3</label>
                    <div class="col-md-12">                     
                        <input  type='file' class="form-control" id="imagen3" name="imagen3" placeholder="Digite el nombre de la etapa" accept="image/x-png,image/jpeg" required>
                    </div>
                </div>
            </fieldset>
            <div class="col-md-12">
                <!-- Button (Double) -->
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <button type="submit" id="button1id" name="button1id" class="btn btn-success btn-lg btn-block">INGRESAR</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

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
        if (result === "ingresado") {
            $('#mensaje').html('El proceso de produccion fue ingresado con éxito.');
            $('#exampleModal').modal('show');
        } else if (result === "noingresado") {
            $('#mensaje').html('El proceso de produccion no fue ingresado con éxito.');
            $('#exampleModal').modal('show');
        } else if (result === "vacios") {
            $('#mensaje').html('El proceso de produccion no fue ingresado con éxito porque hay campos vacios.');
            $('#exampleModal').modal('show');
        } else if (result === "yaexiste") {
            $('#mensaje').html('El proceso de produccion no fue ingresado con éxito porque el nombre de alguna imagen se repite.');
            $('#exampleModal').modal('show');
        }
    });
</script>