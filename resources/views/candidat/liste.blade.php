@extends('layouts.app')

@section('contenu_nav')

    <div class="container texte-center bg-body-tertiary">
        <div class="card">
            <div class="card-header bg-info fw-bolder text-center">
                Listes Des Candidats :
            </div>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de Naissance</th>
                        <th>Parti</th>
                        <th>Edit</th>
                    </tr>
        
                    @foreach ($candidat as $candidates)
                        <tr>
                            <td>{{$candidates->id}}</td>
                            <td>{{$candidates->nom}}</td>
                            <td>{{$candidates->prenom}}</td>
                            <td>{{$candidates->dateNaissance}}</td>
                            <td>{{$candidates->Parti}}</td>
                            <td>
                                <a href="{{ route('edit-candidat', $candidates->id)}}" class="btn btn-outline-dark">Editer</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
@endsection