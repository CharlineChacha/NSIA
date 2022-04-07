@extends('layouts.design')


@section('content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div  class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Validation de demandes</h1>
          </div>
        </div>
      </div>
    </div>


            <div class="col-md-12">


                  <div class="container">
                    <form action="{{ route('demande.update', $demande->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          @if (session()->has('message'))
                          <div class="alert alert-success">
                              {{ (Session('message')) }}
                          </div>
                          @endif

                          <div class="jumbotron text-center">
                            <h2>{{ $demande->id }}</h2>
                            <p>
                                <strong>Nom:</strong> {{ $demande->employe->nomEmploye }}<br>
                                <strong>Prenoms:</strong> {{ $demande->employe->prenomEmploye }} <br>
                                <strong>Consommable:</strong> {{ $demande->consommable->nomConsommable }} <br>
                                <strong>Details:</strong> {{ $demande->details }} <br>
                                <strong>Motif:</strong> {{ $demande->choix }} <br>
                                <strong>Details supplementaires:</strong> {{ $demande->supplementaire }} <br>
                                <strong>Date:</strong> {{ $demande->created_at }} <br>
                            </p>
                        </div>
                          <input type="submit" value="Valider" class="btn btn-outline-success">
                          <a href="{{ route('demande.index') }}" class="btn btn-outline-danger">Annuler</a>
                    </form>

                  </div>

             </div>






@endsection
