@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Categories</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('categorie.create') }}' class=" btn btn-primary" >+ Creer une categorie</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des categories</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nom de la categorie</th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $categories as $categorie )
                    <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->nomCategorie }}</td>
                        <td>
                            <div class='d-flex justify-content-between'>
                                <a href="{{ route('categorie.edit', $categorie->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('categorie.destroy', $categorie->id) }}" method="post">
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
            </div>
    </section>
   

  </div>



@endsection
