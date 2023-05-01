<div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $modalOptions['title'] }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-content">
                
                <form action="{{ route($modalOptions['action'], $data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <p class="text-center">{{ $modalOptions['content'] }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Sim</button>
                        <button type="button" id="btnCancelar" class="btn btn-secondary"
                            data-dismiss="modal">Não</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
