@extends('layouts.design')


@section('content')


    <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Stock consommables</h1>
          </div>
        </div>
      </div>
     </div>

     <section class="content" style="height:50%;width:700px; " >
        <div class="card" class="m-auto">
            <div class="card-header">
              <h3 class="card-title">Ajouter un stock</h3> <br/>
                @if (session()->has('message'))
                <span class="text-success">{{ session('message') }}</span>
                @endif
            </div>
              <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('stockconsommable.store') }}" method="POST">
                    @csrf
                    @method('POST')


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
                        <input type="number" class="form-control" value="{{ old('quantite') }}" name="quantite" placeholder="Entrer la quantité du consommable dans le stock">
                        @error('quantite')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>


                      <div class="form-group">
                        <label for="">Date d'entrée</label>
                        <input type="date" class="form-control" value="{{ old('date') }}" name="date" >
                        @error('date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <input type="submit" value="Ajouter" class="btn btn-outline-primary">
                      <a href="{{ route('stockconsommable.index') }}" class="btn btn-outline-danger">Annuler</a>

              </form>
            </div>
        </div>
     </section>

    </div>

 @endsection
