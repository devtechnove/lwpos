            </div>
            <div class="modal-footer">
                 <div class="hstack gap-2 justify-content-center">
                    <button type="button" wire.click.prevent="resetUI()" class="btn btn-light close-btn text-info" data-bs-dismiss="modal">Close</button>
                   @if($selected_id < 1)
                        <button type="button" wire.click.prevent="Store()" class="btn btn-primary close-modal" data-bs-dismiss="modal">Guardar</button>
                    @else
                       <button type="button" wire.click.prevent="Update()" class="btn btn-primary close-modal" data-bs-dismiss="modal">Actualizar</button>
                   @endif
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
