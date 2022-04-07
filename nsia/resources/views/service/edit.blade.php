@extends('layouts.design')


@section('content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div  class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Services</h1>
          </div>
        </div>
      </div>
    </div>


            <div class="col-md-6">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Modifier un service</h3>
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
                    <form action="{{ route('service.update', $service->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                        <div class="form-group">
                            <label for="">Nom du service</label>
                            <input type="text" class="form-control" value="{{$service->nomservice}}"  name="nom" placeholder="Entrer le nom du service">
                            @error('nomsev')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>



                       <div class="form-group">
                        <label for="departement">Selectionner votre departement</label>
                        <select class="form-control" name="nomdep" id="nomdep">
                            @foreach($departements as $departement)
                                   <option value="{{ $departement->id }}">{{ $departement->nomdep }}</option>
                            @endforeach
                        </select>
                      </div>
                      @error('nomdep')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror

                          <div class="form-group">
                            <label for="">Nom du chef service</label>
                            <input type="text" class="form-control" value="{{$service->nomchefservice}}"  name="nomchef" placeholder="Entrer le nom du chef de service" >
                            @error('nomchef')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <input type="submit" value="Modifier" class="btn btn-outline-primary">
                       <a href="{{ route('service.index') }}" class="btn btn-outline-danger">Annuler</a>
                    </form>

                  </div>

                </div>






@endsection
