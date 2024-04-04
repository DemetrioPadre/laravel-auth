@extends('layouts.app')
@section('title', 'Lista Progetti')

@section('content')
    <section>
        <div class="container ">
            <h1 class="my-4">Lista progetti</h1>
            <table class="table">
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
                                ...actions
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
