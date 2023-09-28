@extends('layouts.app')

@section('contenu_nav')

    <div class="jumbotron text-center">
        <div class="text-center my-2">
            <img src="https://www.theholler.org/wp-content/uploads/2017/03/vote-hands-850x450.jpg" class="img-fluid rounded float-center" alt="Responsive image">
        </div>
    <h1>Bienvenue au Gestionnaire de votes</h1> 
        <div class="d-grid gap-2 col-6 mx-auto">
            <hr>
            <a href="/voter/candidat"class="btn btn-outline-dark"><strong>VOTER</strong></a>
     </div>
    </div>
    
@endsection