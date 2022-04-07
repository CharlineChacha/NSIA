@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Fournisseurs</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('fournisseur.create') }}' class=" btn btn-primary" >+ Creer un fournisseur</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des fournisseurs</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow ">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Noms fournisseurs</th>
                    <th>Adresses fournisseurs</th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $fournisseurs as $fournisseur )
                    <tr>
                        <td>{{ $fournisseur->id }}</td>
                        <td>{{ $fournisseur->nomFournisseur }}</td>
                        <td>{{ $fournisseur->adresseFournisseur }}</td>
                        <td>
                            <div class='d-flex justify-content-between'>
                                <a href="{{ route('fournisseur.edit', $fournisseur->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('fournisseur.destroy', $fournisseur->id) }}" method="post">
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
