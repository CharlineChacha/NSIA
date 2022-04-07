@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Services</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('service.create') }}' class=" btn btn-primary" >+ Ajouter un service</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des services</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">Nom du service</th>
                    <th style="width: 20px">Nom du departement</th>
                    <th style="width: 20px">Nom du chef de service</th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $services as $service )
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->nomservice }}</td>
                        <td>{{ $service->departement->nomdep }}</td>
                        <td>{{ $service->nomchefservice }}</td>



                        <td>
                            <div class='d-flex justify-content-between' style="margin: 15px; padding=50px" >
                                <a href="{{ route('service.edit', $service->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('service.destroy', $service->id) }}" method="post">
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



