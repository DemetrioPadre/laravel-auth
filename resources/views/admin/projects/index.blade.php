@extends('layouts.app')
@section('title', 'Lista Progetti')

@section('content')
    <section>
        <div class="container ">

            <a href="{{ route('admin.project.create') }}" class="my-4 btn btn-primary"><i class="fa-solid fa-plus me-2"></i>
                Crea un Nuovo
                Progetto</a>
            <h1 class="mb-4">Lista progetti</h1>
            <table class="table mb-5">
                <thead>
                    <tr>
                        <th>TItolo</th>
                        <th>Slug </th>
                        <th>Estratto</th>
                        <th></th>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $project['title'] }}</td>
                            <td>{{ $project['slug'] }} </td>
                            <td>{{ $project->getAbstract(50) }}</td>
                            <td>
                                <a href="{{ route('admin.project.show', $project) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.project.edit', $project) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.project.destroy', $project) }}" class="btn btn-danger"><i
                                        class="fa-solid fa-trash "></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%">
                                <i>Nessun Risultato</i>
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
            {{ $projects->links('pagination::bootstrap-5') }}

        </div>
    </section>
@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
