@extends('layouts.app')

@section('contenu_nav')
    <div class="container text-center mt-4">
        @if (session('success'))
        <div class="alert alert-success mt-3">
            {{session('success')}}
        </div>
        @endif 
        <div class="card">
            <div class="card-header bg-info text-dark fw-bolder">Editer votre Candidature :</div>
            <div class="card-body bg-body-tertiary">
                <form action="{{ route('update.candidat',$candidat->id) }}" method="post">
                    @csrf
                    <div class="form-group d-grid mt-2">
                        <label for="" class="fw-bolder">Nom :</label>
                        <input type="text" name="nom" id="" class="form-control text-center fw-bolder" value="{{$candidat->nom}}" required>
                    </div>

                    <div class="form-group d-grid mt-2">
                        <label for="" class="fw-bolder">Prenom :</label>
                        <input type="text" name="prenom" id="" class="form-control text-center fw-bolder" value="{{$candidat->prenom}}" required>
                    </div>
                    <div class="form-group d-grid mt-2">
                        <label for="" class="fw-bolder">Date De Naissance :</label>
                        <input type="date" name="dateNaissance" id="" pattern="\d{2}-\d{2}-\d{4}" class="form-control text-center fw-bolder" value="{{$candidat->dateNaissance}}">
                    </div>


                    <div class="form-group d-grid mt-2">
                        <label for="" class="fw-bolder">Parti :</label>
                        <input type="text" name="parti" id="" class="form-control text-center fw-bolder" value="{{$candidat->Parti}}" required>
                    </div>

                    <div class="form-group d-grid mt-2">
                        <label for="" class="fw-bolder">pays de naissance :</label>
                        <input type="text" name="paysNaissance" id="" class="form-control text-center fw-bolder" value="{{$candidat->paysNaissance}}" required>
                    </div>

                    <div class="d-grid col-6 mx-auto mt-5">
                        <button class="btn btn-outline-dark fw-bolder"><strong>Modifier</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection