@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Lista progetti</h1>
            @dump($projects)
        </div>
    </section>
@endsection
