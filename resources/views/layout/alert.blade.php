{{-- {{ dd(session()->get(0)) }} --}}
@if (session()->get('true'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-check-circle"></i>
        <span>
            <strong>{{ session()->get('true') }}</strong>
        </span>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session()->get('false'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fa fa-check-circle"></i>
        <span>
            <strong>{{ session()->get('true') }}</strong>
        </span>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
