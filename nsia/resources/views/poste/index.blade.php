@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Postes</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('poste.create') }}' class=" btn btn-primary" >+ Ajouter un poste</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des postes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">Nom du service </th>
                    <th style="width: 20px">Nom du poste</th>
                    <th style="width: 20px">Nom de l'occupant </th>
                    <th style="width: 20px">Date debut </th>
                    <th style="width: 20px">Date fin </th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $postes as $poste )
                    <tr>
                        <td>{{ $poste->id }}</td>
                        <td>{{ $poste->service->nomservice }}</td>
                        <td>{{ $poste->nomposte}}</td>
                        <td>{{ $poste->nomuserposte }}</td>
                        <td>{{ $poste->datedebut }}</td>
                        <td>{{ $poste->datefin }}</td>



                        <td>
                            <div class='d-flex justify-content-between' style="margin: 15px; padding=50px" >
                                <a href="{{ route('poste.edit', $poste->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('poste.destroy', $poste->id) }}" method="post">
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



