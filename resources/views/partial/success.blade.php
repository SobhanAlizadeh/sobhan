
@if(session()->has('success'))
    <div class="alter alert-dismissable alert-success w3-padding">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            {!! session()->get('success') !!}
        </strong>
    </div>
    @endif
