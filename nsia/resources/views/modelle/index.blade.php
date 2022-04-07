@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Models des consommables</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('modelle.create') }}' class=" btn btn-primary" >+ Ajouter un model</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des Models de consommables</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">Nom du consommable</th>
                    <th style="width: 20px">Reference</th>
                    <th style="width: 20px">Details</th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $modelles as $modelle )
                    <tr>
                        <td>{{ $modelle->id }}</td>
                        <td>{{ $modelle->consommable->nomConsommable }}</td>
                        <td>{{ $modelle->referenceModel}}</td>
                        <td>{{ $modelle->detailModel }}</td>


                        <td>
                            <div class='d-flex justify-content-between' style="margin: 15px; padding=50px" >
                                <a href="{{ route('modelle.edit', $modelle->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('modelle.destroy', $modelle->id) }}" method="post">
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



