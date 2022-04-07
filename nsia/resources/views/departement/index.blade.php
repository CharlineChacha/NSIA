@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Departements</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('departement.create') }}' class=" btn btn-primary" >+ Creer un departement</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des departements</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nom du departement</th>
                    <th>Nom du chef departement</th>
                    <th  style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $departements as $departement )
                    <tr>
                        <td>{{ $departement->id }}</td>
                        <td>{{ $departement->nomdep }}</td>
                        <td>{{ $departement->nomchefdep }}</td>
                        <td>
                            <div class='d-flex justify-content-between'>
                                <a href="{{ route('departement.edit', $departement->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('departement.destroy', $departement->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class='btn btn-outline-danger'>Supprimer</button>
                                </form>
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
