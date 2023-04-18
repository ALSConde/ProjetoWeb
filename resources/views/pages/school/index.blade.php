@extends('layout.app')
@section('content')
    <x-breadcrumb :title="$title" :items="$items"></x-breadcrumb>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    @include('layout.alert')
                    <table class="table table-striped table-bordered table-hover" id="tableEscolas">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>Telefone</th>
                                <th>Email</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($schools as $school)
                                <tr>
                                    <td>{{ $school->id }}</td>
                                    <td>{{ $school->name }}</td>
                                    <td>{{ $school->address }}</td>
                                    <td>{{ $school->phone }}</td>
                                    <td>{{ $school->email }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ url('/school/edit/' . $school->id) }}"><i
                                                class="fa fa-pencil"></i></a>
                                        <a class="btn btn-danger btn-sm" href="{{ url('/school/exclude', $school->id) }}"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" style="text-align: center">Nenhum registro encontrado</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{ url('/school/create') }}">
                        <i class="fa fa-plus-circle">Adicionar</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
