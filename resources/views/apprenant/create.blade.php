@extends('layouts.home')


@section('content')

    <div class="container">
        <h1>Ajouter un apprenant</h1>


        @if ($errors->any())
            <div class="alert alert-danger">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>
        @endif

        <form action="{{ url('apprenant') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
            </div>

            <div class="form-group mb-3">

                <label for="prenom">Prenom:</label>
                <input type="text" class="form-control" id="prenom" placeholder="prenom" name="prenom">

            </div>

            <div class="form-group mb-3">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" placeholder="age" name="age">
            </div>

            <div class="form-group mb-3">
                <label for="telephone">Telephone:</label>
                <input type="number" class="form-control" id="telephone" placeholder="telephone" name="telephone">
            </div>
            <div class="form-group mb-3">
                <label for="niveau">Niveau:</label>
                <input type="number" class="form-control" id="niveau" placeholder="niveau" name="niveau">
            </div>

            <button type="submit" class="btn btn-primary">Enregister</button>

        </form>
    </div>
@endsection
apprenant/show.blade.php
