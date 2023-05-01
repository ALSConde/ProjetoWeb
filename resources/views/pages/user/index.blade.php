@extends('layout.app')
@section('content')
    <x-breadcrumb :title="$title" :items="$items"></x-breadcrumb>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    @include('layout.alert')
                    <table class="table table-striped table-bordered table-hover" id="tableUsers">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ route('user.delete', $user->id) }}"><i
                                                class="fa fa-pencil"></i></a>
                                        <button class="btn btn-danger btn-sm" id="showModal">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <x-Modal :data="$user" :modalOptions="$modalOptions"></x-Modal>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" style="text-align: center">Nenhum registro encontrado</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{ route('user.create') }}">
                        <i class="fa fa-plus-circle">Adicionar</i>
                    </a>
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
            window.location = "{{ route('user.index') }}";
        });
    </script>
@endsection
