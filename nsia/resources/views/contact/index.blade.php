@extends('layouts.design')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="text-center">
            <a href='{{ Route('contact.create') }}' class=" btn btn-primary" >+ Ajouter contact</a>
        </div> <br/>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des contacts</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">Nom du fournisseur</th>
                    <th style="width: 20px">contacts</th>
                    <th style="width: 20%">Actions</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $contacts as $contact )
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->fournisseur->nomFournisseur }}</td>
                        <td>{{ $contact->numeroTel }}</td>


                        <td>
                            <div class='d-flex justify-content-between' style="margin: 15px; padding=50px" >
                                <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-outline-primary">Modifier</a>
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="post">
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
            {{ $contacts->links() }}

    </section>

  </div>

@endsection



