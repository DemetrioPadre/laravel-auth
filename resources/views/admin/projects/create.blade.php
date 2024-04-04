@extends('layouts.app')
@section('title', 'Crea Nuovo Progetto')

@section('content')
    <section>
        <div class="container ">

            <a href="{{ route('admin.project.index') }}" class="my-4 btn btn-primary"><i
                    class="fa-solid fa-circle-left fa-beat"></i>
                Torna alla Lista Dei Progetti</a>
            <h1 class="mb-4">Crea Nuovo Progetto</h1>

            <form action="{{ route('admin.project.store') }}" class="row g-3" method="POST">
                @csrf
                <div class="col-12">
                    <label class="form-label" for="title">Titolo</label>
                    <input class="form-control " id="title" name="title" type="text">
                </div>
                <div class="col-12">
                    <label class="form-label" for="content">Contenuto</label>
                    <textarea class="form-control " id="content" name="content" type="text" placeholder="Scrivi qua il Contenuto"></textarea>
                </div>
                <div class="col-12"> <button class="btn btn-success"> <i
                            class="fa-solid fa-floppy-disk me-1"></i>Salva</button></div>

            </form>
        </div>
    </section>

@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
