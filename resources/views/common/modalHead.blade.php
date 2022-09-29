 <div wire:ignored.self class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal title">
                    <b>{{ $componentName }}</b> | {{ $selected_id > 0 ?  'Editar' : 'Crear' }}
                </h5>
                <h6 class="text-center text-warning" wire.loading>
                    Por favor espere ...
                </h6>
            </div>
            <div class="modal-body text-center p-5">

