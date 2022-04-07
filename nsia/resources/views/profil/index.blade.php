@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profils</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('profil.create') }}' class=" btn btn-primary" >+ Creer un profil</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des profils</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Libellé du profil</th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $profils as $profil )
                    <tr>
                        <td>{{ $profil->id }}</td>
                        <td>{{ $profil->libProfil }}</td>
                        <td>
                            <div class='d-flex justify-content-between'>
                                <a href="{{ route('profil.edit', $profil->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('profil.destroy', $profil->id) }}" method="post">
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
