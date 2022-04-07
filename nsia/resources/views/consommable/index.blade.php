@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Consommables</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('consommable.create') }}' class=" btn btn-primary" >+ Ajouter consommable</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des consommables</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">Nom du consommable</th>
                    <th style="width: 20px">Categorie</th>
                    <th style="width: 20px">Nombre de critiques</th>
                    <th style="width: 20px">Nombre d'alertes</th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $consommables as $consommable )
                    <tr>
                        <td>{{ $consommable->id }}</td>
                        <td>{{ $consommable->nomConsommable }}</td>

                        <td>{{ $consommable->categorie->nomCategorie }}</td>
                        <td>{{ $consommable->nombreCritique }}</td>
                        <td>{{ $consommable->nombreAlert }}</td>


                        <td>
                            <div class='d-flex justify-content-between' style="margin: 15px; padding=50px" >
                                <a href="{{ route('consommable.edit', $consommable->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('consommable.destroy', $consommable->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class='btn btn-outline-danger'>Supprimer</button>
                                </form>
                        </td>
                            </div>
                        </td>

                    </tr>

                    @endforeach

                </tbody>
              </table>
            </div>


    </section>

  </div>

@endsection



