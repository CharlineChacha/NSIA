@extends('layouts.design')


@section('content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div  class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Consommables</h1>
          </div>
        </div>
      </div>
    </div>


            <div class="col-md-6">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Modifier un consommable</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                    @if (session()->has('message'))
                <span class="text-success">{{ session('message') }}</span>
                @endif
                  </div>
                  <div class="card-body">
                    <form action="{{ route('consommable.update', $consommable->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                        <div class="form-group">
                            <label for="">Nom du consommable</label>
                            <input type="text" class="form-control" value="{{$consommable->nomConsommable}}"  name="nomConsommable" placeholder="Entrer le nom du consommable">
                            @error('nomConsommable')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="categorie">Selectionner une categorie</label>
                            <select class="form-control" name="nomCategorie" id="nomCategorie">
                                @foreach($categories as $categorie)
                                       <option value="{{ $categorie->id }}">{{ $categorie->nomCategorie }}</option>
                                @endforeach
                            </select>
                        </div>
                          @error('nomCategorie')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror

                          <input type="submit" value="Modifier" class="btn btn-outline-primary">
                       <a href="{{ route('consommable.index') }}" class="btn btn-outline-danger">Annuler</a>
                    </form>

                  </div>

                </div>






@endsection
