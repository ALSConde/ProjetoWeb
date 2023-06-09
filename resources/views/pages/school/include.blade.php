<!-- construct basic the page -->
@extends('layout.app')

<!-- construct the include page -->
@section('content')
    <div class="container">
        <div class="container">
            <div class="tile">
                <div class="tile-body">
                    <form action="{{ route('school.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('pages.school.__form')
                        <div class="row mt-5">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <button class="btn btn-primary btn-lg">
                                    <i class="fa fa-plus-circle">
                                        Incluir nova Escola
                                    </i>
                                </button>
                                <a id="cancelar" class="btn btn-secondary btn-lg" href="{{ route('school.index') }}">
                                    <i class="fa fa-arrow-left">
                                        Cancelar cadastro
                                    </i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
