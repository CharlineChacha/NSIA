@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Journal de connexion</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('journal.create') }}' class=" btn btn-primary" >+ Ajouter un employe</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des journaux</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">Noms </th>
                    <th style="width: 20px">Prenoms </th>
                    <th style="width: 20px">Etat de connexion </th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $journals as $journal )
                    <tr>
                        <td>{{ $journal->id }}</td>
                        <td>{{ $journal->employe->nomEmploye }}</td>
                        <td>{{ $journal->employe->prenomEmploye }}</td>
                        <td>{{ $journal->created_at->diffForHumans() }}</td>


                        <td>
                            <div class='d-flex justify-content-between' style="margin: 15px; padding=50px" >
                                <a href="{{ route('journal.edit', $journal->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('journal.destroy', $journal->id) }}" method="post">
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



