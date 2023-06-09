<!-- construct basic the page -->
@extends('layout.app')

<!-- construct the include page -->
@section('content')
    <div class="container">
        <div class="container">
            <div class="tile">
                <div class="tile-body">
                    <form action="{{ url('/school/update', $school->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('pages.school.__form')
                        <div class="row mt-5">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <button class="btn btn-primary btn-lg" id="showModal">
                                    <i class="fa fa-plus-circle">
                                        Salvar alteração
                                    </i>
                                </button>
                                <x-Modal :data="$school" :modalOptions="$modalOptions"></x-Modal>
                                <a id="cancelar" class="btn btn-secondary btn-lg" href="{{ url('/school') }}">
                                    <i class="fa fa-arrow-left">
                                        Cancelar alteração
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
@section('javascript')
    <script>
        $('#showModal').on('click', function(event) {
            event.preventDefault();
            $('#myModal').modal('show');
        });
        $('#btnCancelar').on('click', function(event) {
            window.location = "{{ route('school.index') }}";
        });
    </script>
@endsection
