<!-- sample modal content -->
<div id="modalmantenimiento" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdltitulo">Modal Heading</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <div class="modal-body">
                <form method="post" id="producto_form">
                    <input type="hidden" id="prod_id" name="prod_id">
                    <div class="form-group">
                        <label for="prod_nombre">Nombre</label>
                        <input type="email" class="form-control" id="prod_nombre" name="prod_nombre" placeholder="Ingrese nombre" required>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" form="producto_form">Guardar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->