<div class="modal fade modal-theme" id="{{$id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">{{$title ?? ''}}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mt-5">
                    {{$content ?? ''}}    
                </div>
            </div>

            <div class="modal-footer px-0 pb-0">
                <button type="button" class="btn-flat" data-bs-dismiss="modal">{{$cancel_text ?? 'Cancelar'}}</button>
                <button type="button" class="btn-theme" onclick="{{$onsubmit ?? 'return null'}}">{{$submit_text ?? 'Ok'}}</button>
            </div>
        </div>
    </div>
</div>