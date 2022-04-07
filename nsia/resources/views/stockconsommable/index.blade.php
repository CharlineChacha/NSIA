@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Stock Consommables</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('stockconsommable.create') }}' class=" btn btn-primary" >+ Ajouter un stock</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des stock de consommables</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">Nom du consommable</th>
                    <th style="width: 20px">Quantité </th>
                    <th style="width: 20px">Date d'entrée</th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $stockconsommables as $stockconsommable )
                    <tr>
                        <td>{{ $stockconsommable->id }}</td>
                        <td>{{ $stockconsommable->consommable->nomConsommable }}</td>
                        <td>{{ $stockconsommable->quantite }}</td>
                        <td>{{ $stockconsommable->dateEntree }}</td>


                        <td>
                            <div class='d-flex justify-content-between' style="margin: 15px; padding=50px" >
                                <a href="{{ route('stockconsommable.edit', $stockconsommable->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('stockconsommable.destroy', $stockconsommable->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class='btn btn-outline-danger'>Supprimer</button>
                                </form>
                            </div>

                    </tr>

                    @endforeach

                </tbody>
              </table>
            </div>


    </section>

  </div>

@endsection



