@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employes</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('employe.create') }}' class=" btn btn-primary" >+ Ajouter un employe</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des employes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">Noms </th>
                    <th style="width: 20px">Prenoms </th>
                    <th style="width: 20px">Emails</th>
                    <th style="width: 20px">Mot de passe</th>
                    <th style="width: 20px">Tel</th>
                    <th style="width: 20px">Photos</th>
                    <th style="width: 20px">Postes</th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $employes as $employe )
                    <tr>
                        <td>{{ $employe->id }}</td>
                        <td>{{ $employe->nomEmploye }}</td>
                        <td>{{ $employe->prenomEmploye }}</td>
                        <td>{{ $employe->mailEmploye }}</td>
                        <td>{{ $employe->password }}</td>
                        <td>{{ $employe->numeroTelinterne }}</td>
                        <td> <img src="{{ asset("storage/".$employe->photoEmploye ) }}" height="40px" alt="" srcset=""> </td>
                        <td>{{ $employe->poste->nomposte }}</td>




                        <td>
                            <div class='d-flex justify-content-between' style="margin: 15px; padding=50px" >
                                <a href="{{ route('employe.edit', $employe->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('employe.destroy', $employe->id) }}" method="post">
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



