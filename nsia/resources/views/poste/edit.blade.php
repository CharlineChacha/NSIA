@extends('layouts.design')


@section('content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div  class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Postes</h1>
          </div>
        </div>
      </div>
    </div>


            <div class="col-md-6">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Modifier un poste</h3>
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
                    <form action="{{ route('poste.update', $poste->id) }}" method="POST">
                          @csrf
                          @method('PUT')


                       <div class="form-group">
                        <label for="departement">Selectionner le service</label>
                        <select class="form-control" name="nomsev" id="nomsev">
                            @foreach($services as $service)
                                   <option value="{{ $service->id }}">{{ $service->nomservice }}</option>
                            @endforeach
                        </select>
                      </div>
                      @error('nomsev')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror

                        <div class="form-group">
                            <label for="">Nom du poste</label>
                            <input type="text" class="form-control" value="{{$poste->nomservice}}"  name="nom" placeholder="Entrer le nom du poste">
                            @error('nom')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>


                          <div class="form-group">
                            <label for="">Nom de l'occupant du poste</label>
                            <input type="text" class="form-control" value="{{$poste->nomuserposte}}"  name="nomuser" placeholder="Entrer le nom de l'occupant du poste" >
                            @error('nomuser')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="">Date de debut de l'occupation du poste</label>
                            <input type="date" class="form-control" value="{{$poste->datedebut}}"  name="debut"  >
                            @error('debut')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="">Date de fin de l'occupation du poste</label>
                            <input type="date" class="form-control" value="{{$poste->datefin}}"  name="fin" >
                            @error('fin')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <input type="submit" value="Modifier" class="btn btn-outline-primary">
                       <a href="{{ route('demande.index') }}" class="btn btn-outline-danger">Annuler</a>
                    </form>

                  </div>

                </div>






@endsection
