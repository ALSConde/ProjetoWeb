<!-- construct basic the page -->
@extends('layout.app')

<!-- construct the include page -->
@section('content')
    @guest
        <div class="container">
            <div class="tile">
                <div class="tile-body">
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('pages.user.__form')
                        <div class="row mt-5">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <button class="btn btn-primary btn-lg">
                                    <i class="fa fa-plus-circle">
                                        Cadastrar-se
                                    </i>
                                </button>
                                <a id="cancelar" class="btn btn-secondary btn-lg" href="{{ url('/usuario/cancelar') }}">
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
    @else
        <div class="container">
            <div class="tile">
                <div class="tile-body">

                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('pages.user.__form')
                        <div class="row mt-5">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <button class="btn btn-primary btn-lg">
                                    <i class="fa fa-plus-circle">
                                        Incluir novo usuário
                                    </i>
                                </button>
                                <a id="cancelar" class="btn btn-secondary btn-lg" href="{{ route('user.index') }}">
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
    @endguest
@endsection
