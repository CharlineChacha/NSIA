@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Demandes</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des demandes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">Noms  </th>
                    <th style="width: 20px">Prenoms </th>
                    <th style="width: 20px">Consommables</th>
                    <th style="width: 20px">Details</th>
                    <th style="width: 20px">Motif</th>
                    <th style="width: 20px">Details de la demande</th>
                    <th style="width: 20px">Date</th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $demandes as $demande )
                    <tr>
                        <td>{{ $demande->id }}</td>
                        <td>{{ $demande->employe->nomEmploye }}</td>
                        <td>{{ $demande->employe->prenomEmploye }}</td>
                        <td>{{ $demande->consommable->nomConsommable }}</td>
                        <td>{{ $demande->details }}</td>
                        <td>{{ $demande->choix }}</td>
                        <td>{{ $demande->supplementaire }}</td>
                        <td>{{ $demande->created_at }}</td>


                        <td>
                            <div class='d-flex justify-content-between' style="margin: 15px; padding=50px" >
                                <a href="{{ route('demande.edit', $demande->id) }}" class="btn btn-outline-success">Valider</a>
                                <form action="{{ route('demande.destroy', $demande->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class='btn btn-outline-danger'>Refuser</button>
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



