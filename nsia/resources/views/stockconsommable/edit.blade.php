@extends('layouts.design')


@section('content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div  class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Stock des consommables</h1>
          </div>
        </div>
      </div>
    </div>


            <div class="col-md-6">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Modifier un stock</h3>
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
                    <form action="{{ route('stockconsommable.update', $stockconsommable->id) }}" method="POST">
                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label for="consommable">Selectionner un consommable</label>
                            <select class="form-control" name="consommable" id="consommable">
                                @foreach($consommables as $consommable)
                                       <option value="{{ $consommable->id }}">{{ $consommable->nomConsommable }}</option>
                                @endforeach
                            </select>
                          </div>
                          @error('consommable')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror

                          <div class="form-group">
                            <label for="">Quantité</label>
                            <input type="number" class="form-control" value="{{$stockconsommable->quantite}}"  name="quantite" placeholder="Entrer la quantité du consommable">
                            @error('quantite')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="">Date d'entrée</label>
                            <input type="date" class="form-control" value="{{$stockconsommable->dateEntree}}"  name="date" >
                            @error('date')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <input type="submit" value="Modifier" class="btn btn-outline-primary">
                          <a href="{{ route('stockconsommable.index') }}" class="btn btn-outline-danger">Annuler</a>
                    </form>

                  </div>

                </div>






@endsection
