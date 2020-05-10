<!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center><strong><h3 class="modal-title text-muted">Generar factura</h3></strong></center>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" placeholder="Nit" aria-describedby="helpId">
                            <strong><small id="helpId" class="text-muted">Nit</small></strong>
                            <select class="form-control" name="mPago" id="mPago">
                                <option> Seleccione....</option>
    
                            </select>
                            <strong><label for="" class="text-muted">Metodo de pago</label></strong>
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" data-numeric="true" placeholder="No. de documento" aria-describedby="helpId">
                            <strong><small id="helpId" class="text-muted">Número de documneto</small></strong>
                            <select class="form-control" name="service" id="service">
                                <option> Seleccione....</option>
    
                            </select>
                            <strong><label for="" class="text-muted">Servicio</label></strong>
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" data-numeric="true" placeholder="Cantidad" aria-describedby="helpId">
                            <strong><small id="helpId" class="text-muted">Cantidad</small></strong>
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" data-mask="date" aria-describedby="helpId">
                            <strong><small id="helpId" class="text-muted">Fecha de envio </small></strong>
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" aria-describedby="helpId" placeholder="Dirección">
                            <strong><small id="helpId" class="text-muted">Dirección de envio </small></strong>
                            <input type="hidden" name="" id="" class="form-control" value="Colombia">
                            <select class="form-control" name="service" id="service">
                                <option> Seleccione....</option>
    
                            </select>
                            <strong><label for="" class="text-muted">Ciudad</label></strong>
                            <div class="form-group">
                              <strong><label for="" class="text-muted">Observaciones</label></strong>
                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Generar</button>
                </div>
            </div>
        </div>
    </div>

<?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/modalFactura.blade.php ENDPATH**/ ?>